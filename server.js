import express from 'express';
import { createServer } from 'http';
import { Server } from 'socket.io';
import mysql from 'mysql';

const app = express();
const http = createServer(app);
const socketIO = new Server(http, {
    cors: {
        origin: '*'
    }
});

const users = [];

socketIO.on('connection', (socket) => {
    socket.on('connected', (userId) => {
        users[userId] = socket.id;
        console.log(users);
    });

    const connection = mysql.createConnection({
        host: 'fiv2-server.mysql.database.azure.com',
        port: 3306,
        user: 'lqeiqcvcxf',
        password: 'Z$DrWPfTD8TtiRKg',
        database: 'fiv2-database'
    });

    connection.connect((error) => {
        if (error) {
            console.error('Database connection failed: ' + error.stack);
            return;
        }
        console.log('Database connected as id ' + connection.threadId);
    });

    socket.on("sendLoginEventToAdmin", async function (data) {
        console.log(data);
        socketIO.to(users[0]).emit("userLoginNotificationReceived", 'Some info Submitted Please Refresh');
    });

    socket.on("sendUserLoginPageRefreshEvent", async function (data) {
        console.log(data);
        socketIO.to(users[data.userId]).emit("userLoginNotificationReceived", data.type);
    });

    socket.on("sendEvent", async function (data) {
        connection.query("SELECT * FROM users WHERE id = ?", [data.userId], function (error, receiver) {
            if (error) {
                console.error('Error fetching receiver:', error);
                connection.end(); // Close the connection on error
                return;
            }
            if (receiver != null && receiver.length > 0) {
                connection.query("SELECT * FROM users WHERE id = ?", [data.myId], function (error, sender) {
                    if (error) {
                        console.error('Error fetching sender:', error);
                    } else if (sender.length > 0) {
                        var message = "New message received from: " + sender[0].name + ". Message: " + data.message;
                        socketIO.to(users[receiver[0].id]).emit("messageReceived", message);
                    }
                    connection.end(); // Close the connection after the query is done
                });
            } else {
                connection.end(); // Close the connection if no receiver found
            }
        });
    });

    socket.on('disconnect', () => {
        console.log(`User ${socket.id} disconnected`);
        // Optionally close the connection here if you have an open connection per socket
        // connection.end();
    });
});
const PORT = process.env.PORT || 8080;
http.listen(PORT,() => {
    console.log('Server is started.');
});
