<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <link rel="shortcut icon" href="https://d19qjkjk65tfln.cloudfront.net:443/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://d19qjkjk65tfln.cloudfront.net:443/img/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://d19qjkjk65tfln.cloudfront.net:443/js/bootstrap-modal.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://d19qjkjk65tfln.cloudfront.net:443/css/jquery-ui.css?v=2"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
    <link href="https://d19qjkjk65tfln.cloudfront.net:443/css/shohoz_style.css?v=10.0.13" rel="stylesheet">
    <link href="https://d19qjkjk65tfln.cloudfront.net:443/css/meanmenu.min.css" rel="stylesheet">
    <link href="https://d19qjkjk65tfln.cloudfront.net:443/css/template.css?v=1" rel="stylesheet">
    <noscript>
        <meta http-equiv="refresh" id="mtaJSCheck" content="0;/enable-javascript.html"/>
    </noscript>
    <link href="https://d19qjkjk65tfln.cloudfront.net:443/font-awesome-4.3.0/css/font-awesome.css?v=2" rel="stylesheet">
    <title>Flight</title>
    <link href="https://d19qjkjk65tfln.cloudfront.net:443/css/loader.css" rel="stylesheet">
    <style>
        body {
            font-family: Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
            padding: 0;
            font-weight: 400;
            box-sizing: border-box;
        }

        .home {
            max-width: 1150px;
            margin: auto;
            font-family: 'Roboto', sans-serif;
        }

        .home .row-1 {
            height: auto;
        }

        .home .row-1 .form-div {
            display: flex;
            flex: 1;
            align-items: center;
            margin-right: 20px;
        }

        .home .row-1 form {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .home .row-1 form > div {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
        }

        .home .row-1 form .first-input {
            margin-right: 20px;
        }

        .home .row-1 form > div > div {
            flex: 1;
        }

        .home .row-1 form input {
            width: 100%;
            border: 1px solid #CCCCCC;
            box-sizing: border-box;
            border-radius: 4px;
            height: 30px;
            padding-left: 8px;
        }

        .home .row-1 form label {
            font-weight: 600;
            font-size: 10px;
            line-height: 22px;
            color: #333333;
            margin: 0;
        }

        .home .row-1 form input::placeholder {
            font-size: 10px;
            line-height: 22px;
            color: #999C9F;
            font-weight: 400;
        }

        .home .row-1 form input:focus {
            outline: none;
        }

        .home .row-1 form button {
            width: 100%;
            background: #006747;
            border-radius: 4px;
            border: none;
            color: white;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            height: 30px;
        }

        .home .row-1 .banner-div {
            border-radius: 10px;
            margin: 10px;
            margin-right: 0;
            position: relative;
        }

        .banner-image-wrap {
            width: 100%;
            z-index: 1;
            overflow: hidden;
            border-radius: 10px;
        }

        .banner-image-wrap img {
            width: 100%;
        }

        .home .row-1 .banner-div .banner-content {
            text-align: right;
            margin-top: 40px;
            margin-right: 20px;
            position: absolute;
            z-index: 2;
            right: 0;
            top: 0;
        }

        .home .row-1 .banner-div .banner-content .slogan .bold {
            font-weight: 700;
            color: #006747;
        }

        .banner-content .slogan {
            font-family: Barlow, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 15px;
        }

        .home .row-1 .money-partners img {
            height: 18px;
        }

        .home .row-1 .money-partners {
            width: 260px;
            margin-left: auto;
        }

        .home .row-1 .money-partners {
            display: flex;
            justify-content: space-between;
        }

        .home .row-2 {
            display: flex;
            justify-content: space-between;
            margin-bottom: 112px;
            column-gap: 15px;
        }

        .home .row-2 .step-div {
            max-width: 250px;
            width: 100%;
        }

        .home .row-2 .step-div .heading-div {
            font-weight: 900;
            font-size: 27px;
            line-height: 27px;
            color: #333333;
        }

        .home .row-2 .step-div .description-div {
            font-size: 14px;
            line-height: 24px;
            color: #333333;
        }

        .home .row-2 .step-div .img-div {
            height: 200px;
            display: flex;
            margin-bottom: 20px;
        }

        .home .row-2 .step-div .img-div img {
            max-width: 100%;
        }

        .home .row-2 .step-div .heading-div {
            margin-bottom: 20px;
        }

        .home .row-2 .step-div .description-div {
            font-weight: 400;
        }

        .home .row-3 {
            margin-bottom: 50px;
            padding: 30px 0;
            border-top: 1px solid #D1D5DD;
            border-bottom: 1px solid #D1D5DD;
            width: 100vw;
        }

        form#trainsearch {
            margin-top: 75px;
        }

        .search-col-rw {
            margin-bottom: 42px;
        }

        @media screen and (min-width: 884px) {
            .home .row-3 {
                margin-left: calc((884px - 100vw) / 2);
            }
        }

        #main_wrapper {
            margin-top: 100px !important;
        }

        .railway-payment-partners-wrapper {
            padding: 30px 0;
            border-top: 1px solid #D1D5DD;
            border-bottom: 1px solid #D1D5DD;
            width: 100%;
        }

        .railway-payment-partners-wrapper .money-partners {
            display: flex;
            justify-content: center;
        }

        .railway-payment-partners-wrapper .money-partners .money-logo {
            margin-right: 28px;
            height: 43px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home .row-4 {
            min-height: 135px;
            display: flex;
            align-items: center;
        }

        .home .row-4 .note {
            font-weight: bold;
            font-size: 13px;
            line-height: 23px;
            text-align: center;
            color: #333333;
        }

        .srch_container {
            border-bottom: 0;
            margin-bottom: 80px;
        }

        #content {
            margin-top: 0;
        }

        .top-header {
            display: none;
        }

        .money-logo img {
            max-width: 100%;
            max-height: 100%;
        }

        .main-meta-title {
            display: none;
        }

        .available-tickets,
        .today-visited-users {
            background: #EEF4F2;
            opacity: 0.75;
            border-radius: 8px;
            height: 104px;
            margin: 0;
            position: relative;
        }

        .counter-loader {
            position: absolute;
            right: 10px;
            bottom: 10px;
            animation: load 1.5s normal infinite;
        }

        @keyframes load {
            100% {
                transform: rotate(360deg);
            }
        }

        .counter-title-col {
            height: 48px;
            background: linear-gradient(90.83deg, #003424 -0.19%, #4cbc9a 102.47%);
            padding: 14px 26px 14px 20px;
            border-radius: 8px 8px 0 0;
            margin: 0;
        }

        .today-visited-users .counter-title-col {
            background: linear-gradient(90.83deg, #bc6e24 -0.19%, #F4A861 102.47%);
            padding-top: 9px;
        }

        .counter-title {
            font-family: 'Arial';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            color: #FFFFFF;
            margin: 0;
            display: flex;
        }

        .today-visited-users {
            margin-left: 0;
        }

        .counter-label {
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 14px;
            color: #023623;
            display: inline-block;
        }

        .counter-value {
            font-family: 'Arial';
            font-style: normal;
            font-weight: 700;
            font-size: 27px;
            line-height: 27px;
            color: #023623;
            display: inline-block;
            margin-left: 10px;
        }

        .date-slider {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 150px;
            float: right;
        }

        .slider-btn {
            width: 14px;
            height: 14px;
            font-size: 10px;
            flex-basis: 14px;
            min-width: 14px !important;
            text-align: center;
            border-radius: 9px;
            border: 0;
            outline: 0;
            padding: 0;
            position: relative;
            transition: 0.5s transform;
        }

        .slider-btn:hover {
            transform: scale(1.5);
        }

        .date-text-wrapper {
            font-weight: bold;
            font-size: 14px;
        }

        .last-updated-text {
            text-align: right;
            font-size: 12px;
            margin: 0;
            line-height: 14px;
            color: #023623;
        }

        .last-updated-datetime {
            margin-bottom: 30px;
            font-family: 'Lato', 'Arial', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 22px;
            text-align: center;
            color: #023623;
        }

        .today-visited-users .counter-title {
            padding-top: 4px;
        }

        .instruction-section {
            margin: 0 0 140px;
        }

        .instruction-section h3 {
            font-family: 'Arial';
            font-style: normal;
            font-weight: 700;
            font-size: 27px;
            line-height: 31px;
            color: #023623;
            margin: 0 0 20px;
        }

        ul.instruction-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul.instruction-list li {
            display: flex;
            overflow: hidden;
            height: auto;
            margin-bottom: 15px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 26px;
            color: #023623;
        }

        .list-icon-holder {
            background: #006747;
            width: 30px;
            height: 30px;
            line-height: 30px;
            padding: 0;
            text-align: center;
            color: #FFF;
            border-radius: 15px;
            margin-right: 10px;
            flex-basis: 32px;
        }

        .list-item-text {
            width: 100%;
        }

        img.instruction-image {
            max-width: 100%;
        }

        .rail-sheba-bold-link {
            color: #023623;
            font-weight: bold;
            text-decoration: none;
        }

        .rail-sheba-underlined-link {
            color: #006747;
            font-weight: bold;
            text-decoration: underline;
        }

        .counter-section {
            margin-bottom: 150px;
        }

        .counter-data-col {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 54px;
        }

        .online-offline-data {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 54px;
        }

        @media screen and (max-width: 991px) {
            .home .row-1 .banner-div {
                margin-left: 0;
            }

            .search-col-rw {
                padding-right: 0;
            }

            .home .row-4 .note {
                padding: 0 30px;
            }

            img.instruction-image {
                margin-bottom: 30px;
            }

            .instruction-section h3 {
                font-size: 20px;
            }

            .list-icon-holder {
                width: 24px;
                height: 24px;
                line-height: 24px;
                font-size: 12px;
                flex-basis: 26.77px;
            }

            ul.instruction-list li {
                font-size: 14px;
                line-height: 24px;
            }

            .counter-title-col {
                height: auto;
            }

            .date-slider {
                float: left;
                margin: 5px 15px 0;
            }

            .available-tickets, .today-visited-users {
                height: auto;
                margin-bottom: 30px;
            }

            .counter-data-col, .online-offline-data {
                height: 70px;
            }

            .last-updated-text {
                text-align: left;
                margin: 5px 15px 0;
            }

            .counter-label {
                margin-left: 20px;
            }

            .instruction-section {
                margin-bottom: 110px;
            }

            .counter-section {
                margin-bottom: 80px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .home .row-2 {
                position: relative;
                top: 50px;
            }
        }

        @media screen and (max-width: 767px) {
            .home .row-2 {
                display: block;
                margin-bottom: 70px;
            }

            .home .row-2 .step-div {
                width: 280px;
                margin: 0 auto 50px;
            }

            .railway-payment-partners-wrapper .money-partners {
                display: block;
            }

            .railway-payment-partners-wrapper .money-partners .money-logo {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .home .row-4 {
                height: auto;
                padding-top: 45px;
                padding-bottom: 30px;
            }

            .date-text-wrapper {
                color: #FFFFFF;
            }

            img.instruction-image {
                margin: 0 auto 30px;
                display: block;
            }
        }

        @media (max-width: 480px) {
            .home .row-1 {
                margin-bottom: 0;
            }

            form#trainsearch {
                margin-top: 25px;
            }

            .home .row-4 .note {
                padding: 0 20px;
            }

            .footer {
                padding: 50px 15px !important;
            }

            .home .row-1 .money-partners {
                width: 110px;
            }

            .banner-content .slogan {
                font-size: 12px;
            }

            .home .row-1 .banner-div .banner-content {
                margin-top: 20px;
            }

            .search-col-rw {
                margin-bottom: 30px;
            }
        }
    </style>
    <style>
        .truck-nav:hover .truck-nav-icon-black {
            display: none !important;
        }

        .truck-nav-icon-white {
            display: none;
        }

        .main-navigation ul li a:hover, .main-navigation ul li a.current {
            background: inherit !important;
            color: #0F2444 !important;
            border-bottom: 2px solid #0F2444;
            border-radius: 0;
        }

        .main-navigation ul li a:focus, .main-navigation ul li a:active {
            text-decoration: none;
        }

        .current .truck-nav-icon-white {
            display: inline !important;
        }

        .truck-nav:hover .truck-nav-icon-white {
            display: inline !important;
        }

        .main-navigation {
            margin-right: 0;
            float: right;
            margin-top: 8px;
        }

        .site-logo .header-logo {
            display: flex;
            align-items: center;
            color: #DA924E;
            font-weight: 700;
            font-size: 20px;
            text-decoration: none;
        }

        .site-logo .header-logo .header-logo-img {
            margin-right: 10px;
        }

        .site-logo .header-logo-text {
            align-items: center;
            color: #DA924E;
            font-weight: 700;
            font-size: 20px;
        }

        .main-header {
            padding: 15px 0 10px;
        }

        .railway-logged-user {
            width: 211px;
            height: 42px;
            border: 1px solid #eeeeee !important;
            border-radius: 8px !important;
            box-sizing: border-box;
            color: #001529 !important;
            font-weight: bold;
            line-height: 42px;
            display: flex !important;
            justify-content: space-between;
            padding: 0 20px !important;
            align-items: center;
        }

        span.user-name-text {
            flex-basis: 157px;
            text-align: left;
            text-overflow: ellipsis;
            overflow: hidden;
            font-size: 14px !important;
            white-space: nowrap;
        }

        .railway-logged-user:hover, .railway-logged-user.has-active-child {
            border: 1px solid #C4C4C4 !important;
            border-radius: 8px !important;
        }

        .user-dropdown-railway {
            position: relative;
        }

        .user-dropdown-railway a i {
            font-size: 12px;
        }

        .user-dropdown-railway a .fa-chevron-up {
            display: none;
        }

        .user-dropdown-railway .user-related-links .single-url a {
            border-bottom: 0 !important;
            display: flex !important;
            align-items: center;
            column-gap: 15px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px !important;
            line-height: 22px !important;
            color: #6E6E6E !important;
            padding: 0 20px !important;
            height: 22px;
        }

        .user-dropdown-railway .user-related-links .single-url a > i {
            flex-basis: 16px;
            font-size: 16px;
            text-align: center;
        }

        .user-dropdown-submenu {
            position: absolute;
            width: 274px;
            height: auto;
            text-align: left;
            top: 100%;
            right: 0;
            display: none;
            background: #FFFFFF;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            z-index: 100;
            padding: 20px 0 0;
        }

        p.drop-title-user {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 22px;
            color: #001529;
            margin: 0 0 24px;
            padding: 0 20px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dropdown-user-info {
            display: flex;
            padding: 0 20px;
            align-items: center;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 22px;
            color: #6E6E6E;
            column-gap: 15px;
            height: auto;
            margin-bottom: 20px;
        }

        .dropdown-user-info span {
            word-break: break-word;
        }

        .dropdown-user-info i {
            flex-basis: 16px;
            text-align: center;
        }

        .dropdown-user-info i.fa-envelope {
            font-size: 16px;
        }

        .dropdown-user-info i.fa-mobile {
            font-size: 28px;
        }

        .user-dropdown-divider {
            height: 1px;
            background: #CCC;
            margin-bottom: 20px;
        }

        .user-dropdown-submenu .user-related-links .single-url {
            display: block;
            margin-bottom: 20px;
            height: 22px;
        }

        .user-dropdown-submenu .user-related-links .single-url > a:hover, .user-dropdown-submenu .user-related-links .single-url > a.current {
            border-bottom-color: transparent !important;
            color: #006747 !important;
        }

        @media (max-width: 991px) {
            .user-dropdown-submenu {
                width: 100%;
                padding: 20px 0;
            }

            .dropdown-user-info,
            .user-dropdown-railway .user-related-links .single-url a,
            p.drop-title-user {
                padding: 0 5% !important;
            }

            .mean-container .mean-nav ul li.mean-last .railway-logged-user {
                width: 100%;
                color: #FFF !important;
                padding: 0 5% !important;
                border-left: 0 !important;
                border-bottom: 0 !important;
                border-radius: 0 !important;
                border-top: 1px solid rgba(255, 255, 255, .5) !important;
                background-color: #089d49 !important;
            }

            .user-dropdown-railway a .fa-chevron-up, .user-dropdown-railway a .fa-chevron-down {
                position: absolute;
                right: 20px;
            }

            .user-dropdown-railway a:hover .fa-chevron-down {
                display: none;
            }
        }

        @media screen and (max-width: 767px) {
            .truck-nav-icon-white {
                display: inline;
            }

            .truck-nav-icon-black {
                display: none;
            }

            .railway-logged-user {
                color: #FFF;
                padding: 10px 20px;
            }

            header.new-header .site-wrapper {
                padding-left: 0;
            }
        }
    </style>
    <style type="text/css">
        #claim-insurance {
            display: inline-block;
            border: 1px solid #079d49;
            border-radius: 5px;
        }

        #claim-insurance:hover, #claim-insurance:focus {
            color: #079d49;
        }

        #claim-insurance span {
            float: left;
            font-size: 14px;
            line-height: 14px;
            padding: 10px;
        }

        #claim-insurance img {
            border-left: 1px solid #079d49;
            margin: 0;
            padding: 5px;
            float: left;
            width: 36px;
        }

        #search_sec {
            max-width: 1150px;
            margin: 0 auto;
        }

        /*modal body css*/
        .modal-body {
            top: 138px;
            right: 50px;
            padding: 0px !important;
            width: 744px;
            height: 295px;
            border-radius: 3px !important;
            border: 0px !important;
            display: inline-block;
        }

        .text-label {
            background: #C3E6CF;
            border-radius: 3px;
            width: 155px;
            text-align: center;
            height: 20px;
        }

        .text-label-position {
            padding-top: 3px;
            font-weight: 900;
            font-size: 10px;
            line-height: 15px;
            letter-spacing: 0.3em;
            color: #079D49;
        }

        .btn-size {
            width: 159px;
            height: 35px;
            background: #079D49;
            border: 1px solid #079D49;
            box-sizing: border-box;
            border-radius: 23px;
        }

        .btn-size:focus {
            background: #079D49 !important;
        }

        .btn-size:hover {
            background: #079D49 !important;
        }

        .img-size img {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            width: 100%;
            height: 295px;
        }

        .ipad-size {
            display: inline-block;
        }

        .railway-ticket-search-submit-btn {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
        }

        .railway-ticket-search-submit-btn button:hover {
            background-color: #079d49;
        }

        .railway-ticket-search-submit-btn button {
            width: 100%;
            background: #006747;
            border-radius: 4px;
            border: none;
            color: white;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            height: 40px;
        }

        .railway-form-error {
            min-height: 40px;
            margin: 5px 15px;
            padding: 11px 10px 11px 32px;
            font-weight: normal;
            background: #FFF1F0;
            border: 1px solid #FFCCC7;
            box-sizing: border-box;
            border-radius: 5px;
            font-size: 12px;
            line-height: 16px;
            color: rgba(0, 0, 0, 0.85);
            background-image: url(https://d19qjkjk65tfln.cloudfront.net:443/img/icon/times-circle-icon.svg);
            background-repeat: no-repeat;
            background-position: 10px;
            text-align: left;
        }

        /*---------------------Mobile view responsive -----------------------*/
        @media only screen and (max-width: 767px) {
            .modal-body {
                top: 45px;
                left: 0px;
                width: 100%;
                height: 100%;
            }

            .ipad-size {
                display: flex;
                flex-direction: column-reverse;
            }

            .img-size img {
                width: 100%;
                height: 250px;
                border-top-left-radius: 3px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1199px) {
            .modal-body {
                left: 0px;
                width: 100%;
                height: 100%;
            }

            .ipad-size {
                display: flex;
                flex-direction: column-reverse;
            }

            .img-size img {
                width: 100%;
                height: 250px;
            }
        }

    </style>
</head>
<body>
<link rel="stylesheet" href="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/styles/learn.css?v=1.4.10"/>
<header class="new-header">
    <div class="main-header">
        <div class="container-wrapper">
            <div class="site-wrapper clearfix">
                <div class="site-logo">
                    <a title="Bangladesh Railway" href="dashboard.php" class="header-logo">
                        <div class="header-logo-img">
                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/bangladesh-railway.png"
                                 width="60" alt="Bangladesh Railway Logo">
                        </div>
                        <div class="header-logo-text">
                            Flight Reservation
                        </div>
                    </a>
                </div>
                <nav class="main-navigation" style="display: block;">
                    <ul>
                        <li><a title="Railway Home" href="dashboard.php" class="current">Home</a></li>
                        <li><a title="Login" href="front-login.php" class="">Login</a></li>
                        <li><a title="Register" href="register.php" class="">Register</a></li>
                        <li><a title="Train Information" href="train-information/en.html" class="">Plane Information</a></li>
                    </ul>
                </nav>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>

<div id="main_wrapper">
    <div class="main-meta-title">
        <h1>Flight Reservation</h1>
    </div>
    <div class="clearfix"></div>
    <section id="content" class="container">
        <div id="search_sec" style="padding:0;">
            <div class="clearfix"></div>
            <div class="srch_container" style="padding:10px 0;">
                <div class="block col-md-6 search-col-rw" style="position: static;padding-left: 0;">
                    <div id="dialog_container_block" title="Message Dialog"></div>
                    <form name="trainsearch" id="trainsearch" >
                        <ul class="list-inline">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dest_from">From</label>
                                        <input type="text" class="form-control jqchars " id="dest_from" name="dest_from"
                                               placeholder="From Station" maxlength="15"
                                               value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dest_to">To</label>
                                        <input type="text" class="form-control jqchars" id="dest_to" name="dest_to"
                                               placeholder="To Station" maxlength="15"
                                               value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="doj">Date of Journey</label>
                                        <input type="text" class="datepicker form-control" id="doj" name="doj"
                                               data-date-format="dd/mm/yyyy" placeholder="Pick a date"
                                               value="" readonly="true">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="choose_class">Choose Class</label>
                                        <select name="choose_class" id="choose_class" class="form-control">
                                            <option value="">Choose a Class</option>
                                            <option value="AC_B">AC_B</option>
                                            <option value="AC_S">AC_S</option>
                                            <option value="SNIGDHA">SNIGDHA</option>
                                            <option value="F_BERTH">F_BERTH</option>
                                            <option value="F_SEAT">F_SEAT</option>
                                            <option value="F_CHAIR">F_CHAIR</option>
                                            <option value="S_CHAIR">S_CHAIR</option>
                                            <option value="SHOVAN">SHOVAN</option>
                                            <option value="SHULOV">SHULOV</option>
                                            <option value="AC_CHAIR">AC_CHAIR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row search-widget-button-and-error">
                                <div class="col-md-12" style="margin-top:20px;">
                                    <div class="railway-ticket-search-submit-btn">
                                        <button type="submit">SEARCH Plains</button>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 text-center home" style="padding: 0px;text-align: center;margin:0 auto;">
                    <div class="home">
                        <div class="row-1">
                            <div class="banner-div">
                                <div class="banner-image-wrap">
                                    <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/train-illustration-for-train-1.jpg"
                                         alt="Railway running train banner">
                                </div>
                                <div class="banner-content">
                                    <div class="slogan">
                                        Easy <span class="bold">purchase</span> of <span class="bold">tickets</span>
                                        using<br>
                                        online payment method
                                    </div>

                                    <div class="money-partners">
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/bkash.png"
                                                 alt="BKash a payment method of Bangladesh Railway">
                                        </div>
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/nagad-32.png"
                                                 alt="Nagad a payment method of Bangladesh Railway">
                                        </div>
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/rocket.svg"
                                                 alt="Rocket a payment method of Bangladesh Railway">
                                        </div>
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/master-card.png"
                                                 alt="MasterCard a payment method of Bangladesh Railway">
                                        </div>
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/visa.png"
                                                 alt="Visa a payment method of Bangladesh Railway">
                                        </div>
                                        <div class="money-logo">
                                            <img src="https://d19qjkjk65tfln.cloudfront.net:443/v2/assets/img/home/nexus-debit.svg"
                                                 alt="DBBL Nexus a payment method of Bangladesh Railway">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://d19qjkjk65tfln.cloudfront.net:443/js/modernizr.custom.2.6.2.min.js"></script>
<script src="https://d19qjkjk65tfln.cloudfront.net:443/js/jquery.meanmenu.min.js"></script>
<script>
    $('nav.main-navigation').meanmenu({
        meanScreenWidth: "992",
        meanMenuContainer: '.mobile-menu'
    });

</script>
</body>
</html>
