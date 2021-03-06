<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaravelNews') }}</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--style-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/content-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/news-style.css')}}">



    <!--script-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">



    <!--fontwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
<header>
    @include('layouts.header')
</header>
<div class="container fullNews">
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <div class="postImg">
                    <img src="{{asset($item->imgPath)}}" alt="{{$item->imgPath}}">
                </div>
                     <div class="postAuthor">
                        <h1>{{$item->title}}</h1>
                        <img src="{{asset('img/paul_redmond.jpg')}}" alt=""><br>
                        <span class="label"><span class="text-bold">{{$item->publish_date}}</span><span class="text-grey"> / </span>{{$item->user->name}}</span>
                    </div>
                <div class="postText">
                    {!!$item->text!!}
                </div>
                <hr>
                <div class="postFooter">
                    <h3>
                        Enjoy this? Get Laravel News delivered straight to your inbox every Sunday.
                    </h3>
                    <p>
                        <b>No Spam, ever.</b> We'll never share your email&nbsp;address and you can opt&nbsp;out at any&nbsp;time.
                    </p>
                    <form action="/news/subscribe"  method="POST" class="form-control">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div>
                            <input type="email" placeholder="Email Address" name="email"  class="inputSubscribeFooterPost" required="">
                            <button class="btnSubscribeFooterPost">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
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
