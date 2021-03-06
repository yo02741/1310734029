<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link rel="icon" href="{{url('1.ico')}}" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                /* background-color: rgba(252, 72, 72, 0.5); */
                background-image: -webkit-linear-gradient(45deg, #fc3232, #ff967b);
                background-image: -moz-linear-gradient(right, #fc3232, #ff967b);
                background-image: -o-linear-gradient(right, #fc3232, #ff967b);
                background-image: -ms-linear-gradient(right, #fc3232, #ff967b);
                background-image: linear-gradient(right, #fc3232, #ff967b);

                /* color: #636b6f; */
                color: rgba(49, 49, 218, 0.822);
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
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
                color: rgba(49, 49, 218, 0.822);
                padding: 0 25px;
                font-size: 18px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > span {
                color: rgba(49, 49, 218, 0.822);
                padding: 0 25px;
                font-size: 18px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hello, {{session()->get('name')}} .
                </div>

                <div class="links">
                    <!-- <span>account: {{session()->get('account')}} </span>
                    <span>id: {{session()->get('id')}} </span><br><br> -->
                    <a href="{{url('/comments')}}">Comments</a>
                    <a href="{{url('/logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </body>
</html>
