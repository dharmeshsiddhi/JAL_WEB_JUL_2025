<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jalgaon Police &raquo; Session Expired</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg" color="#5bbad5') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-0 pt-4">
        <div class="content content-fixed content-auth-alt">
            <div class="container ht-100p tx-center">
                <div class="ht-100p d-flex flex-column align-items-center justify-content-center">
                    <h2 class="text-primary">Session Expired !!!</h2>
                    <img src="{{ asset('img/session.png') }}" class="img-fluid mt-2" alt="" style="height:200px">
                    <h4 class="tx-color-01 mt-2">The Session has been expired due to one of the following reasons:</h4>
                    <div class="timeline-group mt-4">
                        <div class="timeline-item">
                            <div class="timeline-time"></div>
                            <div class="timeline-body text-left">
                                <h6 class="mg-b-0">1. You might have kept the browser window idle for a long time.</h6>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-time"></div>
                            <div class="timeline-body text-left">
                                <h6 class="mg-b-0">2. You might have opened another session or logged in from another window.</h6>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-time"></div>
                            <div class="timeline-body text-left">
                                <h6 class="mg-b-0">3. You are accessing the application URL from a saved or static page.</h6>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-time"></div>
                            <div class="timeline-body text-left">
                                <h6 class="mg-b-5">4. You are restricted to do any activity on website.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/" class="btn btn-primary">Go To Login Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>