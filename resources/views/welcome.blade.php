<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">

    <title>Hackean | Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #3d3d3d;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #434343;
            background-image: linear-gradient(#434343, #282828);
        }
        
        .full-height {
            height: 100vh;
        }
        
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        
        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
            padding: 0 5px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 5px;
            text-decoration: none;
        }

        .bin {
            color: #fff;
            padding: 0 25px;
            margin-top: 10px;
            font-size: 13px;
            font-weight: 300;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .content {
            text-align: center;
            background-color: transparent;
            background-image: linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent), linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent);
            height: 100%;
            background-size: 50px 50px;
        }
        
        .title {
            font-size: 10vw;
        }
        
        .spelling {
            color: #fff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            font-family: 'Open Sans', sans-serif;
        }
        
        .motto {
            font-size: 40px;
            font-family: 'Playfair Display SC', serif;
        }

        .welcome {
            font-size: 20px;
            font-family: 'ZCOOL KuaiLe', cursive;
            margin-top: 30px;
        }
        
        .links > a {
            color: #fff;
            padding: 0 13px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .selection ::selection {
            background-color: #00FF41;
            color: #0D0208;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links selection">
                @auth
                <a href="{{ url('/home') }}">Home</a> @else
                <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a> @endif @endauth
            </div>
            @endif

            <div class="selection">
                <div class="title m-b-md"> &quaternions;&Lambda;&Sub;&Kcedil;&isinE;&Delta;&Nopf;
                    <div class="spelling">01100110 01100010</div>
                </div>
                <div class="motto"> &lsquo;Hack The World&rsquo; </div>
                <div class="bin">大きいと思う開始小規模高速</div>
                <div class="top-left">/hakin/</div>
            </div>
        </div>
    </div>

</body>
</html>