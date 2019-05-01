<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--Style-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/content-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer-style.css')}}">

    <title>Document</title>
</head>
<body>
<header>
    @include('layouts.header')
</header>
<div class="container">
    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            @include('layouts.sidebarRight')
        </div>
    </div>
</div>
<footer class="footerLn">
    @include('layouts.footer')
</footer>
</body>
</html>
