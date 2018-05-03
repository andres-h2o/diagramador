<!DOCTYPE html>
<html lang="es" data-textdirection="ltr" class="loading">

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 15:19:59 GMT -->
<head>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <style class="cp-pen-styles">body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #27ae60;
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            font-size: 1em;
            letter-spacing: 0.1px;
            color: #32465a;
            text-rendering: optimizeLegibility;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
            -webkit-font-smoothing: antialiased;
        }

        #frame {
            width: 50%;
            min-width: 360px;
            max-width: 500px;
            height: 92vh;
            min-height: 300px;
            max-height: 420px;
            background: #E6EAEA;
        }
        @media screen and (max-width: 360px) {
            #frame {
                width: 100%;
                height: 100vh;
            }
        }
        #frame #sidepanel {
            float: left;
            min-width: 280px;
            max-width: 340px;
            width: 40%;
            height: 100%;
            background: #2c3e50;
            color: #f5f5f5;
            overflow: hidden;
            position: relative;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel {
                width: 58px;
                min-width: 58px;
            }
        }
        #frame #sidepanel #profile {
            width: 80%;
            margin: 25px auto;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile {
                width: 100%;
                margin: 0 auto;
                padding: 5px 0 0 0;
                background: #32465a;
            }
        }
        #frame #sidepanel #profile.expanded .wrap {
            height: 210px;
            line-height: initial;
        }
        #frame #sidepanel #profile.expanded .wrap p {
            margin-top: 20px;
        }
        #frame #sidepanel #profile.expanded .wrap i.expand-button {
            -moz-transform: scaleY(-1);
            -o-transform: scaleY(-1);
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
        #frame #sidepanel #profile .wrap {
            height: 60px;
            line-height: 60px;
            overflow: hidden;
            -moz-transition: 0.3s height ease;
            -o-transition: 0.3s height ease;
            -webkit-transition: 0.3s height ease;
            transition: 0.3s height ease;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap {
                height: 55px;
            }
        }
        #frame #sidepanel #profile .wrap img {
            width: 50px;
            border-radius: 50%;
            padding: 3px;
            border: 2px solid #e74c3c;
            height: auto;
            float: left;
            cursor: pointer;
            -moz-transition: 0.3s border ease;
            -o-transition: 0.3s border ease;
            -webkit-transition: 0.3s border ease;
            transition: 0.3s border ease;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap img {
                width: 40px;
                margin-left: 4px;
            }
        }
        #frame #sidepanel #profile .wrap img.online {
            border: 2px solid #2ecc71;
        }
        #frame #sidepanel #profile .wrap img.away {
            border: 2px solid #f1c40f;
        }
        #frame #sidepanel #profile .wrap img.busy {
            border: 2px solid #e74c3c;
        }
        #frame #sidepanel #profile .wrap img.offline {
            border: 2px solid #95a5a6;
        }
        #frame #sidepanel #profile .wrap p {
            float: left;
            margin-left: 15px;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap p {
                display: none;
            }
        }
        #frame #sidepanel #profile .wrap i.expand-button {
            float: right;
            margin-top: 23px;
            font-size: 0.8em;
            cursor: pointer;
            color: #435f7a;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap i.expand-button {
                display: none;
            }
        }
        #frame #sidepanel #profile .wrap #status-options {
            position: absolute;
            opacity: 0;
            visibility: hidden;
            width: 150px;
            margin: 70px 0 0 0;
            border-radius: 6px;
            z-index: 99;
            line-height: initial;
            background: #435f7a;
            -moz-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options {
                width: 58px;
                margin-top: 57px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options.active {
            opacity: 1;
            visibility: visible;
            margin: 75px 0 0 0;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options.active {
                margin-top: 62px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 8px solid #435f7a;
            margin: -8px 0 0 24px;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options:before {
                margin-left: 23px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options ul {
            overflow: hidden;
            border-radius: 6px;
        }
        #frame #sidepanel #profile .wrap #status-options ul li {
            padding: 15px 0 30px 18px;
            display: block;
            cursor: pointer;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li {
                padding: 15px 0 35px 22px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options ul li:hover {
            background: #496886;
        }
        #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 5px 0 0 0;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
                width: 14px;
                height: 14px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            margin: -3px 0 0 -3px;
            background: transparent;
            border-radius: 50%;
            z-index: 0;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
                height: 18px;
                width: 18px;
            }
        }
        #frame #sidepanel #profile .wrap #status-options ul li p {
            padding-left: 12px;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li p {
                display: none;
            }
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
            background: #2ecc71;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
            border: 1px solid #2ecc71;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
            background: #f1c40f;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
            border: 1px solid #f1c40f;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
            background: #e74c3c;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
            border: 1px solid #e74c3c;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
            background: #95a5a6;
        }
        #frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
            border: 1px solid #95a5a6;
        }
        #frame #sidepanel #profile .wrap #expanded {
            padding: 100px 0 0 0;
            display: block;
            line-height: initial !important;
        }
        #frame #sidepanel #profile .wrap #expanded label {
            float: left;
            clear: both;
            margin: 0 8px 5px 0;
            padding: 5px 0;
        }
        #frame #sidepanel #profile .wrap #expanded input {
            border: none;
            margin-bottom: 6px;
            background: #32465a;
            border-radius: 3px;
            color: #f5f5f5;
            padding: 7px;
            width: calc(100% - 43px);
        }
        #frame #sidepanel #profile .wrap #expanded input:focus {
            outline: none;
            background: #435f7a;
        }
        #frame #sidepanel #search {
            border-top: 1px solid #32465a;
            border-bottom: 1px solid #32465a;
            font-weight: 300;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #search {
                display: none;
            }
        }
        #frame #sidepanel #search label {
            position: absolute;
            margin: 10px 0 0 20px;
        }
        #frame #sidepanel #search input {
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
            padding: 10px 0 10px 46px;
            width: calc(100% - 25px);
            border: none;
            background: #32465a;
            color: #f5f5f5;
        }
        #frame #sidepanel #search input:focus {
            outline: none;
            background: #435f7a;
        }
        #frame #sidepanel #search input::-webkit-input-placeholder {
            color: #f5f5f5;
        }
        #frame #sidepanel #search input::-moz-placeholder {
            color: #f5f5f5;
        }
        #frame #sidepanel #search input:-ms-input-placeholder {
            color: #f5f5f5;
        }
        #frame #sidepanel #search input:-moz-placeholder {
            color: #f5f5f5;
        }
        #frame #sidepanel #contacts {
            height: calc(100% - 177px);
            overflow-y: scroll;
            overflow-x: hidden;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts {
                height: calc(100% - 149px);
                overflow-y: scroll;
                overflow-x: hidden;
            }
            #frame #sidepanel #contacts::-webkit-scrollbar {
                display: none;
            }
        }
        #frame #sidepanel #contacts.expanded {
            height: calc(100% - 334px);
        }
        #frame #sidepanel #contacts::-webkit-scrollbar {
            width: 8px;
            background: #2c3e50;
        }
        #frame #sidepanel #contacts::-webkit-scrollbar-thumb {
            background-color: #243140;
        }
        #frame #sidepanel #contacts ul li.contact {
            position: relative;
            padding: 10px 0 15px 0;
            font-size: 0.9em;
            cursor: pointer;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact {
                padding: 6px 0 46px 8px;
            }
        }
        #frame #sidepanel #contacts ul li.contact:hover {
            background: #32465a;
        }
        #frame #sidepanel #contacts ul li.contact.active {
            background: #32465a;
            border-right: 5px solid #435f7a;
        }
        #frame #sidepanel #contacts ul li.contact.active span.contact-status {
            border: 2px solid #32465a !important;
        }
        #frame #sidepanel #contacts ul li.contact .wrap {
            width: 88%;
            margin: 0 auto;
            position: relative;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap {
                width: 100%;
            }
        }
        #frame #sidepanel #contacts ul li.contact .wrap span {
            position: absolute;
            left: 0;
            margin: -2px 0 0 -2px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #2c3e50;
            background: #95a5a6;
        }
        #frame #sidepanel #contacts ul li.contact .wrap span.online {
            background: #2ecc71;
        }
        #frame #sidepanel #contacts ul li.contact .wrap span.away {
            background: #f1c40f;
        }
        #frame #sidepanel #contacts ul li.contact .wrap span.busy {
            background: #e74c3c;
        }
        #frame #sidepanel #contacts ul li.contact .wrap img {
            width: 40px;
            border-radius: 50%;
            float: left;
            margin-right: 10px;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap img {
                margin-right: 0px;
            }
        }
        #frame #sidepanel #contacts ul li.contact .wrap .meta {
            padding: 5px 0 0 0;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap .meta {
                display: none;
            }
        }
        #frame #sidepanel #contacts ul li.contact .wrap .meta .name {
            font-weight: 600;
        }
        #frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
            margin: 5px 0 0 0;
            padding: 0 0 1px;
            font-weight: 400;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -moz-transition: 1s all ease;
            -o-transition: 1s all ease;
            -webkit-transition: 1s all ease;
            transition: 1s all ease;
        }
        #frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
            position: initial;
            border-radius: initial;
            background: none;
            border: none;
            padding: 0 2px 0 0;
            margin: 0 0 0 1px;
            opacity: .5;
        }
        #frame #sidepanel #bottom-bar {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        #frame #sidepanel #bottom-bar button {
            float: left;
            border: none;
            width: 50%;
            padding: 10px 0;
            background: #32465a;
            color: #f5f5f5;
            cursor: pointer;
            font-size: 0.85em;
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button {
                float: none;
                width: 100%;
                padding: 15px 0;
            }
        }
        #frame #sidepanel #bottom-bar button:focus {
            outline: none;
        }
        #frame #sidepanel #bottom-bar button:nth-child(1) {
            border-right: 1px solid #2c3e50;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button:nth-child(1) {
                border-right: none;
                border-bottom: 1px solid #2c3e50;
            }
        }
        #frame #sidepanel #bottom-bar button:hover {
            background: #435f7a;
        }
        #frame #sidepanel #bottom-bar button i {
            margin-right: 3px;
            font-size: 1em;
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button i {
                font-size: 1.3em;
            }
        }
        @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button span {
                display: none;
            }
        }
        #frame .content {
            float: right;
            width: 60%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }
        @media screen and (max-width: 735px) {
            #frame .content {
                width: calc(100% - 58px);
                min-width: 300px !important;
            }
        }
        @media screen and (min-width: 900px) {
            #frame .content {
                width: calc(100% - 340px);
            }
        }
        #frame .content .contact-profile {
            width: 100%;
            height: 60px;
            line-height: 60px;
            background: #f5f5f5;
        }
        #frame .content .contact-profile img {
            width: 40px;
            border-radius: 50%;
            float: left;
            margin: 9px 12px 0 9px;
        }
        #frame .content .contact-profile p {
            float: left;
        }
        #frame .content .contact-profile .social-media {
            float: right;
        }
        #frame .content .contact-profile .social-media i {
            margin-left: 14px;
            cursor: pointer;
        }
        #frame .content .contact-profile .social-media i:nth-last-child(1) {
            margin-right: 20px;
        }
        #frame .content .contact-profile .social-media i:hover {
            color: #435f7a;
        }
        #frame .content .messages {
            height: auto;
            min-height: calc(100% - 93px);
            max-height: calc(100% - 93px);
            overflow-y: scroll;
            overflow-x: hidden;
        }
        @media screen and (max-width: 735px) {
            #frame .content .messages {
                max-height: calc(100% - 105px);
            }
        }
        #frame .content .messages::-webkit-scrollbar {
            width: 8px;
            background: transparent;
        }
        #frame .content .messages::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
        }
        #frame .content .messages ul li {
            display: inline-block;
            clear: both;
            float: left;
            margin: 15px 15px 5px 15px;
            width: calc(100% - 25px);
            font-size: 0.9em;
        }
        #frame .content .messages ul li:nth-last-child(1) {
            margin-bottom: 20px;
        }
        #frame .content .messages ul li.sent img {
            margin: 6px 8px 0 0;
        }
        #frame .content .messages ul li.sent p {
            background: #435f7a;
            color: #f5f5f5;
        }
        #frame .content .messages ul li.replies img {
            float: right;
            margin: 6px 0 0 8px;
        }
        #frame .content .messages ul li.replies p {
            background: #f5f5f5;
            float: right;
        }
        #frame .content .messages ul li img {
            width: 22px;
            border-radius: 50%;
            float: left;
        }
        #frame .content .messages ul li p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 205px;
            line-height: 130%;
        }
        @media screen and (min-width: 735px) {
            #frame .content .messages ul li p {
                max-width: 300px;
            }
        }
        #frame .content .message-input {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 99;
        }
        #frame .content .message-input .wrap {
            position: relative;
        }
        #frame .content .message-input .wrap input {
            font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
            float: left;
            border: none;
            width: calc(100% - 90px);
            padding: 11px 32px 10px 8px;
            font-size: 0.8em;
            color: #32465a;
        }
        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap input {
                padding: 15px 32px 16px 8px;
            }
        }
        #frame .content .message-input .wrap input:focus {
            outline: none;
        }
        #frame .content .message-input .wrap .attachment {
            position: absolute;
            right: 60px;
            z-index: 4;
            margin-top: 10px;
            font-size: 1.1em;
            color: #435f7a;
            opacity: .5;
            cursor: pointer;
        }
        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap .attachment {
                margin-top: 17px;
                right: 65px;
            }
        }
        #frame .content .message-input .wrap .attachment:hover {
            opacity: 1;
        }
        #frame .content .message-input .wrap button {
            float: right;
            border: none;
            width: 50px;
            padding: 12px 0;
            cursor: pointer;
            background: #32465a;
            color: #f5f5f5;
        }
        @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap button {
                padding: 16px 0;
            }
        }
        #frame .content .message-input .wrap button:hover {
            background: #435f7a;
        }
        #frame .content .message-input .wrap button:focus {
            outline: none;
        }
    </style>


    <link type="text/css" rel="stylesheet" href="css/UDStyle.css"/>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="UDCore.js"></script>
    <script type="text/javascript" src="UDModules.js"></script>
    <script type="text/javascript" src="UDApplication.js"></script>

<style type="text/css">
    .container{
        text-align:center
    }
    .left{
        float: left;
        background:blue
    }
    .right{
        float: right;
        background:red
    }
    .center{
        background: #bae1a9;
        display:inline-block
    }
    .circular--portrait {
        position: relative;
        width: 40px;
        height: 40px;
        overflow: hidden;
        border-radius: 50%;
        box-shadow: 1px 2px 3px black;

    }
</style>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ config('app.name', 'Construcctora') }}</title>
    <link rel="apple-touch-icon" href="{{asset('admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/charts/morris.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/colors.min.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/timeline.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <!-- END Custom CSS-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .button {
        background-color: #13AFDF;
        border-radius: 6px;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        padding: 16px 24px;
        text-align: center;
        text-transform: uppercase;
        width: auto;
    }
    .button:hover {
        background-color: #FB7E29;
        color: #fff;
    }
    .circular--portrait {
        position: relative;
        width: 40px;
        height: 40px;
        overflow: hidden;
        border-radius: 50%;
        box-shadow: 1px 2px 3px black;

    }

    .circular--portrait img {
        width: 100%;
        height: auto;
        box-shadow: 2px 2px 5px black;
    }
    .centrar {
        display:table-cell;
        vertical-align:middle;
    }
    .center {
        position: absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin: auto;
        background: #83C24A;
        height: 85%;
        box-shadow: 0 0 4px rgba(0,0,0,.3);
    }
    .padre {
        position: relative;
    }
    .hijo {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 50%;
        height: 30%;
        margin: auto;
    }
</style>
<body data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
      class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#"
                                                                               class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a href="#" class="navbar-brand">
                        <h2 class="brand-text">{{ config('app.name', 'Construcctora') }}</h2></a></li>
                <li class="nav-item hidden-sm-down float-xs-right"><a data-toggle="collapse"
                                                                      class="nav-link modern-nav-toggle"></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile"
                                                                    class="nav-link open-navbar-container"><i
                                class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i
                                    class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">

                    <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown"
                                                                   class="dropdown-toggle nav-link dropdown-user-link"><span
                                    class="avatar avatar-online"><img
                                        src="{{asset('admin/app-assets/images/portrait/small/avatar-s-1.png')}}"
                                        alt="avatar"><i></i></span><span class="user-name">{{Auth::user()->name}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i
                                        class="ft-user"></i> Edit Profile</a><a href="#" class="dropdown-item"><i
                                        class="ft-mail"></i> My Inbox</a><a href="#" class="dropdown-item"><i
                                        class="ft-check-square"></i> Task</a><a href="#" class="dropdown-item"><i
                                        class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/login') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <div class="main-menu-content">

        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" navigation-header"><span>General</span><i  data-placement="right"
                                                                  data-original-title="General" class=" ft-minus"></i>
            </li>
            <li><a href={{url('/cliente')}}><i class="fa fa-database"></i>Clientes</a></li>

            <li><a href={{url('/puesto/buscar')}}><i class="fa fa-calendar"></i>Buscar Puesto</a></li>
            <li class=" nav-item"><a href="#">
                    <i class="ft-home"></i>
                    <span data-i18n="" class="menu-title">Personal Ejecutivo</span></a>
                <ul class="menu-content">
                    <li><a href={{url('/vendedor')}}><i class="fa fa-ravelry"></i>Ejecutivos de Ventas</a>
                    </li>
                    <li><a href={{url('/coordinador')}}><i class="fa fa-ravelry"></i>Coordinadores</a>
                    </li>
                    <li><a href={{url('/grupo')}}><i class="fa fa-ravelry"></i>Grupos de Trabajo</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-layout"></i>
                    <span data-i18n="" class="menu-title">Parametros Administrativos</span></a>
                <ul class="menu-content">
                    <li><a href={{url('/proyecto')}}><i class="fa fa-ravelry"></i>Proyectos</a>
                    </li>
                    {{--<li><a href={{url('/modulo')}}><i class="fa fa-ravelry"></i>Modulos</a>
                    </li>
                    <li><a href={{url('/bloque')}}><i class="fa fa-ravelry"></i>Bloques</a>
                    </li>--}}
                    <li><a href={{url('/categoria')}}><i class="fa fa-ravelry"></i>Categoria</a>
                    </li>
                   {{-- <li><a href={{url('/puesto')}}><i class="fa fa-ravelry"></i>Puesto</a>
                    </li>--}}
                </ul>
            </li>


            <li class=" nav-item"><a href="#"><i class="fa fa-user"></i>
                    <span data-i18n=""class="menu-title">Ventas y Reservas</span></a>
                <ul class="menu-content">
                    {{--<li><a href={{url('/venta')}}><i class="fa fa-ravelry"></i>Ventas</a>
                    </li>
                    <li><a href={{url('/reserva')}}><i class="fa fa-ravelry"></i>Reserva</a>
                    </li>
                    <li><a href={{url('/bloqueo')}}><i class="fa fa-ravelry"></i>Bloqueo</a>
                    </li>--}}
                    <li><a href={{url('/tipo-venta')}}><i class="fa fa-ravelry"></i>Tipos de Venta</a>
                    </li>
                    <li><a href={{url('/tipo-reserva')}}><i class="fa fa-ravelry"></i>Tipos de Reserva</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-user"></i>
                    <span data-i18n=""class="menu-title">Gerencia</span></a>
                <ul class="menu-content">
                    <li><a href={{url('/mes')}}><i class="fa fa-ravelry"></i>Resumen General</a>
                    </li>
                    <li><a href={{url('/mes/top-proyectos')}}><i class="fa fa-ravelry"></i>Top Five</a>
                    </li>
                    <li><a href={{url('#')}}><i class="fa fa-ravelry"></i>Venta Segura</a>
                    </li>
                </ul>
            </li>
            <li><a href={{url('/mensaje')}}><i class="fa fa-database"></i>Mensajes</a></li>
        </ul>
    </div>
</div>
<div class="content-body">
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- Stats -->

                <!--/ Basic Horizontal Timeline -->
                <div class="row">
                    <div class="col-xs-13">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sistema de Ventas {{ config('app.name', 'Constructora') }}</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="table-responsive">
                                    <table class="table">

                                        @yield('contenido')
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->

<div class="customizer border-left-blue-grey border-left-lighten-4 hidden-lg-down"><a href="#" class="customizer-close"><i
                class="ft-x font-medium-3"></i></a><a href="#" class="customizer-toggle bg-danger"><i
                class="ft-settings font-medium-3 fa-spin fa fa-spin fa-fw white"></i></a>
    <div class="customizer-content p-2">
        <h4 class="text-uppercase mb-0">Theme Customizer</h4>
        <hr>
        <p>Customize & Preview in Real Time</p>
        <h5 class="mt-1">Layout Options</h5>
        <ul class="nav nav-tabs nav-underline nav-justified layout-options">
            <li class="nav-item">
                <a class="nav-link layouts active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21"
                   href="#tabIcon21" aria-expanded="true">Layouts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navigation" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22"
                   href="#tabIcon22" aria-expanded="false">Navigation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23"
                   href="#tabIcon23" aria-expanded="false">Navbar</a>
            </li>
        </ul>
        <div class="tab-content px-1 pt-1">
            <div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true"
                 aria-labelledby="baseIcon-tab21">
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="collapsed-sidebar" id="collapsed-sidebar"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Collapsed Menu</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="fixed-layout" id="fixed-layout" class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Fixed Layout</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="boxed-layout" id="boxed-layout" class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Boxed Layout</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="static-layout" id="static-layout" class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Static Layout</span>
                    </label>
                </p>
            </div>
            <div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="native-scroll" id="native-scroll" class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Native Scroll</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="right-side-icons" id="right-side-icons"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Right Side Icons</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="bordered-navigation" id="bordered-navigation"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Bordered Navigation</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="flipped-navigation" id="flipped-navigation"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Flipped Navigation</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="collapsible-navigation" id="collapsible-navigation"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Collapsible Navigation</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="static-navigation" id="static-navigation"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Static Navigation</span>
                    </label>
                </p>
            </div>
            <div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="brand-center" id="brand-center" class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Brand Center</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-checkbox">
                        <input type="checkbox" name="navbar-static-top" id="navbar-static-top"
                               class="custom-control-input">
                        <span class="c-indicator bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Static Top</span>
                    </label>
                </p>
            </div>
        </div>
        <hr>
        <h5 class="mt-1">Navigation Color Options</h5>
        <ul class="nav nav-tabs nav-underline nav-justified color-options">
            <li class="nav-item">
                <a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1"
                   href="#clrOpt1" aria-expanded="false">Semi Light</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2"
                   href="#clrOpt2" aria-expanded="false">Semi Dark</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3"
                   aria-expanded="false">Dark</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4"
                   aria-expanded="true">Light</a>
            </li>
        </ul>
        <div class="tab-content px-1 pt-1">
            <div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true"
                 aria-labelledby="color-opt-1">
                <div class="row">
                    <div class="col-xs-6">
                        <h6>Solid</h6>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-blue-grey">
                                <span class="bg-default custom-control-indicator"></span>
                                <span class="custom-control-description">Default</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-primary">
                                <span class="bg-primary custom-control-indicator"></span>
                                <span class="custom-control-description">Primary</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-danger">
                                <span class="bg-danger custom-control-indicator"></span>
                                <span class="custom-control-description">Danger</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-success">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">Success</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-blue">
                                <span class="bg-blue custom-control-indicator"></span>
                                <span class="custom-control-description">Blue</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-cyan">
                                <span class="bg-cyan custom-control-indicator"></span>
                                <span class="custom-control-description">Cyan</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-pink">
                                <span class="bg-pink custom-control-indicator"></span>
                                <span class="custom-control-description">Pink</span>
                            </label>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <h6>Gradient</h6>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" checked class="custom-control-input default"
                                       data-bg="bg-gradient-x-grey-blue">
                                <span class="bg-default custom-control-indicator"></span>
                                <span class="custom-control-description">Default</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-primary">
                                <span class="bg-primary custom-control-indicator"></span>
                                <span class="custom-control-description">Primary</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-danger">
                                <span class="bg-danger custom-control-indicator"></span>
                                <span class="custom-control-description">Danger</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-success">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">Success</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-blue">
                                <span class="bg-blue custom-control-indicator"></span>
                                <span class="custom-control-description">Blue</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-cyan">
                                <span class="bg-cyan custom-control-indicator"></span>
                                <span class="custom-control-description">Cyan</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-slight-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-pink">
                                <span class="bg-pink custom-control-indicator"></span>
                                <span class="custom-control-description">Pink</span>
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" checked class="custom-control-input default"
                               data-bg="bg-default">
                        <span class="bg-default custom-control-indicator"></span>
                        <span class="custom-control-description">Default</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-primary">
                        <span class="bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Primary</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-danger">
                        <span class="bg-danger custom-control-indicator"></span>
                        <span class="custom-control-description">Danger</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-success">
                        <span class="bg-success custom-control-indicator"></span>
                        <span class="custom-control-description">Success</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-blue">
                        <span class="bg-blue custom-control-indicator"></span>
                        <span class="custom-control-description">Blue</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-cyan">
                        <span class="bg-cyan custom-control-indicator"></span>
                        <span class="custom-control-description">Cyan</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-sdark-clr" class="custom-control-input" data-bg="bg-pink">
                        <span class="bg-pink custom-control-indicator"></span>
                        <span class="custom-control-description">Pink</span>
                    </label>
                </p>
            </div>
            <div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
                <div class="row">
                    <div class="col-xs-6">
                        <h3>Solid</h3>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" checked class="custom-control-input default"
                                       data-bg="bg-blue-grey">
                                <span class="bg-default custom-control-indicator"></span>
                                <span class="custom-control-description">Default</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-primary">
                                <span class="bg-primary custom-control-indicator"></span>
                                <span class="custom-control-description">Primary</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-danger">
                                <span class="bg-danger custom-control-indicator"></span>
                                <span class="custom-control-description">Danger</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-success">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">Success</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input" data-bg="bg-blue">
                                <span class="bg-blue custom-control-indicator"></span>
                                <span class="custom-control-description">Blue</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input" data-bg="bg-cyan">
                                <span class="bg-cyan custom-control-indicator"></span>
                                <span class="custom-control-description">Cyan</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input" data-bg="bg-pink">
                                <span class="bg-pink custom-control-indicator"></span>
                                <span class="custom-control-description">Pink</span>
                            </label>
                        </p>
                    </div>

                    <div class="col-xs-6">
                        <h3>Gradient</h3>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-grey-blue">
                                <span class="bg-default custom-control-indicator"></span>
                                <span class="custom-control-description">Default</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-primary">
                                <span class="bg-primary custom-control-indicator"></span>
                                <span class="custom-control-description">Primary</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-danger">
                                <span class="bg-danger custom-control-indicator"></span>
                                <span class="custom-control-description">Danger</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-success">
                                <span class="bg-success custom-control-indicator"></span>
                                <span class="custom-control-description">Success</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-blue">
                                <span class="bg-blue custom-control-indicator"></span>
                                <span class="custom-control-description">Blue</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-cyan">
                                <span class="bg-cyan custom-control-indicator"></span>
                                <span class="custom-control-description">Cyan</span>
                            </label>
                        </p>
                        <p>
                            <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="nav-dark-clr" class="custom-control-input"
                                       data-bg="bg-gradient-x-pink">
                                <span class="bg-pink custom-control-indicator"></span>
                                <span class="custom-control-description">Pink</span>
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" checked class="custom-control-input default"
                               data-bg="bg-blue-grey bg-lighten-4">
                        <span class="bg-default custom-control-indicator"></span>
                        <span class="custom-control-description">Default</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-primary bg-lighten-4">
                        <span class="bg-primary custom-control-indicator"></span>
                        <span class="custom-control-description">Primary</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-danger bg-lighten-4">
                        <span class="bg-danger custom-control-indicator"></span>
                        <span class="custom-control-description">Danger</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-success bg-lighten-4">
                        <span class="bg-success custom-control-indicator"></span>
                        <span class="custom-control-description">Success</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-blue bg-lighten-4">
                        <span class="bg-blue custom-control-indicator"></span>
                        <span class="custom-control-description">Blue</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-cyan bg-lighten-4">
                        <span class="bg-cyan custom-control-indicator"></span>
                        <span class="custom-control-description">Cyan</span>
                    </label>
                </p>
                <p>
                    <label class="display-inline-block custom-control custom-radio">
                        <input type="radio" name="nav-light-clr" class="custom-control-input"
                               data-bg="bg-pink bg-lighten-4">
                        <span class="bg-pink custom-control-indicator"></span>
                        <span class="custom-control-description">Pink</span>
                    </label>
                </p>
            </div>
        </div>
        <hr>
        <h5 class="mt-1 mb-1">Menu Color Options</h5>
        <div class="form-group">
            <!-- Outline Button group -->
            <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" data-sidebar="menu-light">Light Menu</button>
                <button type="button" class="btn btn-outline-primary" data-sidebar="menu-dark">Dark Menu</button>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('admin/app-assets/vendors/js/charts/raphael-min.js')}}" type="admin/text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/charts/morris.min.js')}}" type="admin/text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/extensions/unslider-min.js')}}" type="admin/text/javascript"></script>
<script src="{{asset('admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{asset('admin/app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->


<script src="{{asset('admin/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 15:22:03 GMT -->
</html>