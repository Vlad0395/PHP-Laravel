@extends('layouts.app')
@section('content')
<h1>Welcome</h1>
<div class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="wrap_caption">
                    <div class="caption_carousel">
                        <h1>We are webeeo</h1>
                        <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrap_caption">
                    <div class="caption_carousel">
                        <h1>We are Creative</h1>
                        <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="wrap_caption">
                    <div class="caption_carousel">
                        <h1>We Have Greate Team</h1>
                        <p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@stop
