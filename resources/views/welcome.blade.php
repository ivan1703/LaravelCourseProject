<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav mr-auto">
                @if (Route::has('login'))
                        @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{'tape'}}">Tape</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">To offer the news</a>
                        </li>

                        <li class = "nav-item ">
                            <a class="nav-link" href="{{'home'}}">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{'login'}}">Log in</a>
                        </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{'register'}}">registration</a>
                            </li>
                            @endif
                        @endauth
                @endif


            </ul>
        </div>
    </nav>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    <h1 class="h1">Our news portal</h1>
                </div>
            </div>
        </div>
    </body>
</html>
