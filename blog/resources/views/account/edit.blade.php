<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Account</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--style-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/content-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/header-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-style.css')}}">


    <!--script-->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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
<div class="  message"></div>
<div class="container account">

    <div class="row">
        <div class="col-md-8">
            <div class="userWelcome">

                <div class="accost">
                   Edit your account
                </div>
                <div class="container">

                    <form action="/account/{{Auth::id()}}" method="POST" class="form">
                        @csrf
                        <input type="hidden" value="{{Auth::id()}}" id="user_id" required>
                        <label for="your name">*Your Display Name</label>
                        <input type="text" id="your name" name="name" value="{{$user->name}}" required>
                        <label for="email address" >*E-Mail Address</label>
                        <input type="text" id="email address " name="email" value="{{$user->email}}">
                        <label for="Short Bio">Short Bio</label>
                        <textarea id="Short Bio" cols="30" name="short_bio" rows="10">{{$user->short_bio}}</textarea>
                        <label for="twitter">Your Twitter</label>
                        <input type="text" id="twitter" name="twitter" value="{{$user->twitter}}" placeholder="@LARAVELNEWS">
                        <label for="facebook">Your Facebook UserName</label>
                        <input type="text" id="facebook" name="facebook" value="{{$user->facebook }}">
                        <label for="github">Your GitHub UserName</label>
                        <input type="text" id="github" name="github" value="{{$user->github}}">
                        <button type="submit" class="buttonLN">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="setting">
                <div class="sett">Setting</div>
                <div class="logoutEdit">
                    <a href="/account/edit"><i class="fas fa-user-edit"></i>Edit Your Account</a><br>
                    <a href="#"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                    >
                        <i class="fa fa-fw fa-power-off"></i> {{ trans('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ url(config('logout', '/logout')) }}" method="POST" style="display: none;">
                        @if(config('logout_method'))
                            {{ method_field(config('logout_method')) }}
                        @endif
                        {{ csrf_field() }}
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footerLn">
    @include('layouts.footer')
</footer>
<script>
    $(document).ready(function () {
            $( ".form" ).on( "submit", function(e) {
            e.preventDefault();
            console.log(this);
            let id = $('#user_id').val();
            let data=$(this).serialize();
            $.ajax({
                type:'POST',
                url:"/account/"+id,
                data:data,
                success:function () {
                    $('.message').css('display','block')
                },
                error:function () {
                    $('.message').css('display','block')
                    $('.message').css('background','#9e0505')

                }
            })
        });
        $(document).ajaxSuccess(function(e, xhr,options) {
            $( ".message" ).text( "Your account is updated" );
        });
        $( document ).ajaxError(function() {
            $( ".message" ).text( "Triggered ajaxError handler." );
        });
    });
</script>

</body>
</html>
