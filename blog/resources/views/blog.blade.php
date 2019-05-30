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
    <link rel="stylesheet" href="{{asset('css/mobileHeader-style.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--fontwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>News</title>
</head>
<body>
<header class="headerLnPC">
    @include('layouts.header')
</header>
<header class = "mobile">
    @include('layouts.mobileHeader')
</header>
<div class="container-fluid newsLn">
    <div class="container">
        <h1>Blog</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                @foreach($news as $item)
                    <div class="post">
                        <div class="postImg">
                            <img src="{{asset($item->imgPath)}}" alt="{{$item->imgPath}}">
                        </div>
                        <div class="postContent">
                            <span class="label">News <span class="text-grey">/</span> <span class="text-bold">{{$item->publish_date}}</span></span>
                            <h2><a href="news/{!! $item->id!!}">{!! $item->title !!}</a></h2>
                            <p>{!! ($item->description)!!}</p>
                            <a href="news/{!! $item->id!!}" class="readMore">Read more…</a>
                        </div>
                        <div class="postFooter">
                            <img src="{{asset('img/team_1.jpg')}}" alt="">
                            <div class="postAuthor">
                                <h4>by <a href="">{{$item->user->name}}</a></h4>
                                <div class="authorLink">
                                    <span><a href=""><i class="fab fa-twitter"></i></a></span>
                                    <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                    <span><a href=""><i class="fab fa-github"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$news->links()}}
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
