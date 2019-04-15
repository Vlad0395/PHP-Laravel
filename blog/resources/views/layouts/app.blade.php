<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BlogCar') }}</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--style-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--script-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <!--fontwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
    <div class="row stringRed">
    </div>
    <div class="row justify-content-center" >
        <div class="col-md-5 align-self-center text-center">
            <a href="https://twitter.com/laravelnews"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="https://www.facebook.com/laravelnews"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/laravel-news"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
        <div class="col-md-2 logoLN">
            LN
        </div>
        <div class="col-md-5 align-self-center">
            <form class="form-inline mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <a href="https://laravel-news.com/">Laravel News</a><br>
            <a href="https://laravel-news.com/">THE OFFICIAL LARAVEL NEWS SOURCE</a>
        </div>
    </div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tutorial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Packages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Podcast</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Newsletter</a>
        </li>
    </ul>
    <section class="container">
        <div class="row">
            <div class="col-md-7" >
                <div class="postImg"></div>
                <div class="textNews">
                    <h5>News</h5>
                    <div>Laravel Craftsman CLI</div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 subscript">
                        <h2>Newsletter</h2>
                        <hr>
                        <p>Join the weekly newsletter and never miss out on new tips, tutorials, and more.</p>
                        <form action="" class="form">
                            <input type="email">
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsImg"></div>
                        <div>
                            <h5>NEWS</h5>
                            <p>Laravel Up and Running Second Edition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--1--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--2--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--3--}}
            {{--</div>--}}
        {{--</div>--}}
    </section>
</div>
</body>
</html>
