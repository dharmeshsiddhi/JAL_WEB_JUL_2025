<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jalgaon Police &raquo; Server Maintenance</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg" color="#5bbad5') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 pt-4">
        <div class="content content-fixed content-auth-alt">
            <div class="container tx-center">
                <div class="justify-content-center text-center">
                    <img src="{{ asset('img/maintainance.jpg') }}" class="img-fluid mt-1 mb-4" alt="" style="height:350px">
                    <h4>ESWIMS System is not available due to maintenance.<br><br>Thanks for your patience..!</h4>
                    <div id="countdown"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var server_end = <?php echo $data['exp_date']; ?> * 1000;
        var server_now = <?php echo time(); ?> * 1000;
        var client_now = new Date().getTime();
        var end = server_end - server_now + client_now;

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour *24
        var timer;
        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0 ) {
                clearInterval( timer );
                location.reload();
                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor( (distance % _day ) / _hour );
            var minutes = Math.floor( (distance % _hour) / _minute );
            var seconds = Math.floor( (distance % _minute) / _second );
        }
        timer = setInterval(showRemaining, 1000);
    </script>
</body>
</html>