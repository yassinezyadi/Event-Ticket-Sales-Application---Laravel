<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            margin: 0;
            background-color: #f5f5f5;
        }
        .ticket-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            background-color: #fff;
            margin-left: 31%;
        }
        .ticket-container img {
            width: 100%;
            height: auto;
        }
        .ticket-content {
            padding: 20px;
        }
        .ticket-content h2 {
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
        }
        .ticket-content p {
            margin: 5px 0;
            color: #666;
            text-align: center;
        }
        .ticket-info {
            margin-top: 10px;
            font-size: 16px;
        }
        .ticket-right {
            padding: 20px;
            text-align: center;
        }
        .ticket-right h3 {
            margin: 0 0 20px;
            font-size: 18px;
            text-align: center;
        }
        .ticket-right p {
            margin: 10px 0;
            color: #333;
            text-align: center;
        }
        .ticket-right img {
            width: 100px;
            height: 100px;
        }
        .powered-by {
            margin-top: 20px;
            color: #999;
            font-size: 12px;
        }
        .spane {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <img src="{{ public_path('images/' . $event->image) }}" alt="">
        <div class="ticket-content">
            <h2>{{ $event->event_name }}</h2>
            <p>{{ $event->date }}, {{ $event->time }} AM, {{ $event->duration }} h</p>
            <p>{{ $event->firstName }} {{ $event->lastName }}</p>
            <div class="ticket-info">
                <p style="color: #000000">1 x Ticket</p>
                <p style="color: #000000">Total: {{ $event->price }} Dhs</p>
            </div>
        </div>
        <div class="ticket-right">
            <h3>{{ $event->venue }}</h3>
            <img src="data:image/png;base64,{{ $codeQR }}" alt="QR Code">
            <p class="powered-by">Powered by Barren</p>
        </div>
    </div>

    <!-- Additional meta tags and links -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Barren - Simple Online Event Ticketing System</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
</body>
</html>
