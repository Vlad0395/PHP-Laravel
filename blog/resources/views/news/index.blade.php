<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/news-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/content-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer-style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--fontwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>News</title>
</head>
<body>
    @include('layouts.header')
<div class="container-fluid newsLn">
    <div class="container">
        <h1>News</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <div class="postImg">
                        <img src="{{asset('img/laravel-craftsman-cli.jpg')}}" alt="">
                    </div>
                    <div class="postContent">
                        <span class="label">News <span class="text-grey">/</span> <span class="text-bold">APRIL 12, 2019</span></span>
                        <h2><a href="">Laravel Craftsman CLI</a></h2>
                        <p>Laravel Craftsman is a CLI for easily crafting Laravel assets for any project (artisan make on steroids) by Mike Erickson.</p>
                        <a href="" class="readMore">Read more…</a>
                    </div>
                    <div class="postFooter">
                        <img src="{{asset('img/team_1.jpg')}}" alt="">
                        <div class="postAuthor">
                            <h4>by <a href="">Andrés Santibáñez</a></h4>
                            <div class="authorLink">
                                <span><a href=""><i class="fab fa-twitter"></i></a></span>
                                <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                <span><a href=""><i class="fab fa-github"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('layouts.sidebarRight')
            </div>
        </div>
    </div>
</div>
<footer class="footerLn">
    @include('layouts.footer')
</footer>
</body>
</html>
