
<section class="sectionOne">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <div class="imgMain">
                   <a href="news/{{$main->id}}">
                       <img src="{{asset($main->imgPath)}}" alt="">
                       <div class="cards">
                           <span>{{$main->category->name}}</span>
                           <h3>{{$main->title}}</h3>
                       </div>
                   </a>
               </div>
            </div>
            <div class="col-md-4">
                <div class="row cardMini">
                    <div class="col-md-12 contentSubscribe ">
                        <div class="headerSubscribe">
                            <h2>Newsletter</h2>
                            <img src="{{asset('img/icon-newsletter.png')}}" alt="">
                        </div>
                        <div class="contentSubscribe sizeDesc">
                            <p>Join the weekly newsletter and never miss out on new tips, tutorials, and more.</p>
                            <form action="/news/subscribe"  method="POST" class="form-control">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <input type="email" placeholder="EMAIL ADDRESS" name="email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row cardMini">
                    <div class="col-md-12">
                        <div class="imgOtherNews">
                            <a href="news/{{$rightSideItem->id}}">
                                <img src="{{asset($rightSideItem->imgPath)}}" alt="">
                                <div class="cards">
                                    <span>{{$rightSideItem->category->name}}</span>
                                    <h3>{{$rightSideItem->title}}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($bottomItems as &$item)
            <div class="col-md-4 cardMini">
                <div class="imgOtherNews">
                    <a href="news/{{$item->id}}">
                        <img src="{{asset($item->imgPath)}}" alt="">
                        <div class="cards">
                            <span>{{$item->category->name}}</span>
                            <h3>{{$item->title}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-md-4 cardMini ">
                <div class="imgOtherJobs ">
                    <div class="lJob ">
                        <h2>Laravel Jobs</h2>
                        <img src="{{asset('img/icon-chair.png')}}" alt="">
                    </div>
                    <br>
                    <div>
                        <dl>
                            <dt><a href="">Laravel + VueJS Developer</a></dt>
                            <br>
                            <dt><a href="">Graduate/junior PHP DEvwloper</a></dt>
                        </dl>
                        <div class="linkJobs">
                            <a href="">View more Jobs</a>
                            <a href="">Post a Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="partners">
        <div class="titlePartners">
            <span>Laravel news partners</span>
        </div>
        <div class="logoPartnersMain container">
            <div class="row">
                <div class="col-md-12">
                    <a href=""><img src="{{asset('img/honeybadger-clear.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('img/larajobs-logo.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('img/laravel-shift.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('img/nomadlogo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href=""><img src="{{asset('img/ottomatik.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('img/ringcentral.png')}}" alt=""></a>
                    <a href=""><img src="{{asset('img/vueschool.png')}}" alt=""></a>
                </div>
            </div>
{{----}}
        </div>
    </div>
</section>

