<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<title>Jalgaon Police &raquo; {{ $data['title'] }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="MobileOptimized" content="320" />
        <meta name="theme-color" content="#317EFB"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Jalgaon District Police, Maharashtra State, India">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Expires" content="0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}"	/>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css?ver=132') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('offline/offline-theme-slide.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('offline/offline-language-english.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
        <link href="{{ asset('owl/owl.carousel.css') }}" rel="stylesheet" />
        <link href="{{ asset('owl/owl.theme.css') }}" rel="stylesheet" />
        <link href="{{ asset('hyd/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('hyd/css/pal.css?ver=132') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('chat-ui/chatbot/dist/jquery.convform.css?ver=132') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('chat-ui/chatbot/demo.css') }}">

        <style type="text/css">
            .preloader {
                display: none;
                background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
            }
            .show1 {
                display: flex;
            }
            .homeMainWrapOut{opacity: 0;}
            .homeBody{opacity: 0;}
            .homeBannerSlider .slick-slide:first-child .bannerQuote {
                display: none;
            }
            .search-input{
                background: #fff;
                width: 650px;
                border-radius: 5px;
                position: relative;
                box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
            }
            @media only screen and (max-width: 480px){	
                .search-input{
                    width: 250px;
                }
            }

            .search-input input{
                height: 30px;
                width: 100%;
                outline: none;
                border: none;
                border-radius: 5px;
                padding: 0 60px 0 20px;
                font-size: 15px;
                box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
            }

            .search-input.active input{
                border-radius: 5px 5px 0 0;
            }

            .search-input .autocom-box{
                padding: 0;
                opacity: 0;
                pointer-events: none;
                max-height: 280px;
                overflow-y: auto;
                position: absolute;
                background: #EFF5F5;
                width: 100%;
                margin-top: 2px;
                border-radius: 5px;
            }

            .search-input.active .autocom-box{
                padding: 10px 8px;
                opacity: 1;
                pointer-events: auto;
            }

            .autocom-box li{
                list-style: none;
                padding: 10px 12px !important;
                display: none;
                width: 100%;
                cursor: default;
                border-radius: 3px;
                border-right: 0px !important;
            }

            .search-input.active .autocom-box li{
                display: block;
            }
            .autocom-box li:hover{
                background: #D6E4E5;
            }

            .search-input .icon{
                position: absolute;
                right: 0px;
                top: 0px;
                height: 30px;
                width: 30px;
                text-align: center;
                line-height: 30px;
                font-size: 20px;
                color: #644bff;
                cursor: pointer;
            }
        </style>
        @yield('inlineStyle')
    </head>
    <body class="homeBody" id="bodyId">
        <div class="ajaxLoader">
            <div class="overlay-spinner"></div>
        </div>