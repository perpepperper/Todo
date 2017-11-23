<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Welcome</title>

        <!-- Fonts -->
<!--         <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 head-text">
                    <h1>Bakit List</h1>
                </div>
                <div class="col-md-6 col-md-offset-3 content">
                    @if (Route::has('login'))
                        @auth
                        <div class="col-md-6 col-md-offset-3 buttons">
                            <a href="{{ url('/home') }}"><button>Home</button></a>
                        </div>            
                        @else
                        <div class="col-md-6 buttons">
                            <a href="{{ route('login') }}"><button>Login</button></a>
                        </div>
                        <div class="col-md-6 buttons">
                            <a href="{{ route('register') }}"><button>Register</button></a>
                        </div>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>

<style type="text/css">
    body{
        background: #f4f4f4;
    }

    .head-text h1 {
        font-family: Acme-Regular;
        font-size: 100px;
        text-align: center;
        color: #757575;
    }

    .content {
        background-color: #ffffff;
        max-height: 100%;
        max-width: 100%;
        border: 2px solid #6EA4CA;
        border-radius: 6px;
        text-align: center;
        padding: 20px 0px 20px 0px;

        /*display: flex;
        justify-content: center;
        align-items: center;*/
    }

    .buttons button {
        color: #0C3C60;
        padding: 10px;
        margin: 20px 0px 20px 0px;
        background-color: #f4f4f4;
        border: 1px solid #6EA4CA;
        border-radius: 6px;
        min-width: 150px;
        font-weight: bold;
        font-size: 20pt;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:hover {
        color: #ffffff;
        background-color: #39729B;
        border: 1px solid #6EA4CA;
        outline: none;

        transition: 0.1s ease-in-out;
    }

    .buttons button:active {
        color: #F4F4F4;
        background-color: #0C3C60;
        border: 1px solid #6EA4CA;
        box-shadow: 0px 0px 10px 0px #39729B;

        transition: 0.1s ease-in-out;
    }
</style>
