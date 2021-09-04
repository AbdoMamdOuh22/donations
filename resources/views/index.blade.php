@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start of hero -->
    <section class="hero-slider hero-style-1" >
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                <div class="swiper-slide" @if(Session()->get('lang') == 'ar') dir="rtl" @endif>
                    <div class="slide-inner slide-bg-image" data-background="{{ Voyager::image( $slide['img'] ) }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title" @if(Session()->get('lang') == 'ar') style="text-align: right" @endif>
                                <h2> {{ $slide->getTranslatedAttribute('title',  Session('lang') , 'en') }} </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text" @if(Session()->get('lang') == 'ar') style="text-align: right" @endif>
                                <p>  {{ $slide->getTranslatedAttribute('paragraph',  Session('lang') , 'en') }} </p>
                            </div>
                            <div class="video-btns" @if(session('lang') == 'ar') dir="ltr"  style="right: 0px; left: 10px" @endif >
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"><i class="fi flaticon-play-1"></i></a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination" dir="ltr"></div>
            <div class="container">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="scroll">
                <a href="#about" id="scroll"><i class="fi flaticon-down-arrow-2"></i></a>
            </div>
        </div>

    </section>
    <!-- end of hero slider -->

    <!-- start target-area -->
    <section class="target-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="img-holder">
                        <img src="{{ Voyager::image($aboutHome['img']) }}" alt="" width="100%">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="target-content" @if(session('lang') == 'ar') dir="rtl" @endif >
                        <div class="section-title"> {{ $aboutHome->getTranslatedAttribute('title',  Session('lang') , 'en') }} </h2>
                        </div>
                        <div class="content">
                            <p> {{ $aboutHome->getTranslatedAttribute('paragraph',  Session('lang') , 'en') }} </p>
                            <p> {{ $aboutHome->getTranslatedAttribute('dec',  Session('lang') , 'en') }} </p>

                            <div class="goal-raised" @if(session('lang') == 'ar') dir="rtl" @endif>
                                <div>
                                    <span >

                                        {{ $aboutHome->getTranslatedAttribute('donationgoal_title',  Session('lang') , 'en') }} </span>
                                    <h3> {{ $aboutHome->getTranslatedAttribute('donationGoal',  Session('lang') , 'en') }} </h3>
                                </div>
                                <div>
                                    <span> {{$aboutHome->getTranslatedAttribute('donationralsed_title',  Session('lang') , 'en') }} </span>
                                    <h3> {{ $aboutHome->getTranslatedAttribute('donationRalsed',  Session('lang') , 'en') }} </h3>
                                </div>
                            </div>
                            <a href="#" class="theme-btn-s3"><i class="fi flaticon-like"></i>
                                {{ $aboutHome->getTranslatedAttribute('button',  Session('lang') , 'en') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end target-area -->


    <!-- start causes-section -->
    <section class="causes-section section-padding">
        <div class="container-fluid">
            <div class="section-title-s2">
                <span>
                    {{ $titleHome->getTranslatedAttribute('title_section_causes',  Session('lang') , 'en') }}
                </span>
                <h2>
                    {{ $titleHome->getTranslatedAttribute('heading_causes',  Session('lang') , 'en') }}
                    <span> {{ $titleHome->getTranslatedAttribute('span_heading_causes',  Session('lang') , 'en') }} </span>
                </h2>
            </div>
            <div class="content-area causes-slider" dir="ltr">
                @foreach($causes as $cause)
                <div class="item" @if (session('lang') == 'ar') dir="rtl" @endif>
                    <div class="inner">
                            <img src="{{ Voyager::image($cause['img']) }}" alt="" width="100%">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3><a href="{{ route('causes.show' , $cause['id']) }}">
                                        {{ $cause->getTranslatedAttribute('heading',  Session('lang') , 'en') }}
                                </a></h3>
                                <div class="goal-raised" >
                                    <div><span>{{ $cause->getTranslatedAttribute('donated',  Session('lang') , 'en') }} :
                                        {{ $cause->getTranslatedAttribute('donated_price',  Session('lang') , 'en') }}
                                    </div>
                                    <div><span>{{$cause->getTranslatedAttribute('amount_required' , Session('lang') , 'en') }} :
                                        {{$cause->getTranslatedAttribute('amount_required_price' , Session('lang') , 'en') }}
                                    </div>
                                    <a href="{{ route('causes.show' , $cause['id']) }}" class="donate-btn"><i class="fi flaticon-heart-1"></i>
                                        {{ $cause->getTranslatedAttribute('button',  Session('lang') , 'en') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="button" style="margin: 50px 0px 0px;">
                <a href="{{ route('causes.index') }}"  class="theme-btn-s4">
                    {{ $titleCauses->getTranslatedAttribute('button_causes',  Session('lang') , 'en') }}
                </a>
            </div>
        </div>
    </section>
    <!-- end causes-section -->


    <!-- start about-section -->
    <section class="about-section">
        <div class="content-area">
            <div class="left-col">
                <div class="about-area">
                    <div class="section-title">

                        <span>  {{ $titleHome->getTranslatedAttribute('about_title',  Session('lang') , 'en') }} </span>
                        <h2>    {{ $titleHome->getTranslatedAttribute('heading_about',  Session('lang') , 'en') }}  </h2>
                    </div>
                    <div class="about-details">
                        <p> {{ $titleHome->getTranslatedAttribute('desc_about',  Session('lang') , 'en') }} </p>
                        <div class="btns">
                            <a href="{{ route('about') }}" class="theme-btn-s4">
                                {{ $titleHome->getTranslatedAttribute('button_about',  Session('lang') , 'en') }}
                            </a>
                        </div>
                        <div class="about-features">
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-pencil-case"></i>
                                </div>
                                <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title1',  Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs1',  Session('lang') , 'en') }} </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-fruits"></i>
                                </div>
                                <h3>  {{ $aboutIcon->getTranslatedAttribute('icon_title2',  Session('lang') , 'en') }}{{ $aboutIcon->getTranslatedAttribute('icon_title1',  Session('lang') , 'en') }}{{ $aboutIcon->gettranslatedAttribute('icon_' , Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs2',  Session('lang') , 'en') }}{{ $aboutIcon->getTranslatedAttribute('icon_decs1',  Session('lang') , 'en') }}{{ $aboutIcon->gettranslatedAttribute('icon_' , Session('lang') , 'en') }} </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-donation"></i>
                                </div>
                                <h3>  {{ $aboutIcon->gettranslatedAttribute('icon_title3' , Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->gettranslatedAttribute('icon_decs3' , Session('lang') , 'en') }} </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-charity"></i>
                                </div>
                                <h3>  {{ $aboutIcon->gettranslatedAttribute('icon_title4' , Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->gettranslatedAttribute('icon_decs4' , Session('lang') , 'en') }} </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-smile"></i>
                                </div>
                                <h3>  {{ $aboutIcon->gettranslatedAttribute('icon_title5' , Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->gettranslatedAttribute('icon_decs5' , Session('lang') , 'en') }} </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-like"></i>
                                </div>
                                <h3>  {{ $aboutIcon->gettranslatedAttribute('icon_title6' , Session('lang') , 'en') }} </h3>
                                <p> {{ $aboutIcon->gettranslatedAttribute('icon_decs6' , Session('lang') , 'en') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col data-bg-image" data-background="{{ Voyager::image($aboutIcon['img']) }}">
                </div>
            </div>
        </div> <!-- end content-area -->
    </section>
    <!-- end about-section -->


    <!-- start events-section -->
    <section class="events-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title">
                        <span> {{ $titleHome->getTranslatedAttribute('event_title',  Session('lang') , 'en') }} </span>
                        <h2><span>
                                {{ $titleHome->getTranslatedAttribute('span_heading_event',  Session('lang') , 'en') }}
                                </span> {{ $titleHome->getTranslatedAttribute('heading_event',  Session('lang') , 'en') }}  </h2>
                    </div>
                    <div class="about-details">
                        <p> {{ $titleHome->getTranslatedAttribute('decs_event',  Session('lang') , 'en') }} </p>
                    </div>
                    <a href="{{ route('event.index') }}" class="theme-btn-s4">
                        {{ $titleHome->getTranslatedAttribute('button_event',  Session('lang') , 'en') }}
                    </a>
                </div>
                <div class="col col-md-7">

                    <div class="events-slider-holder">
                        <div class="events-slider" dir="ltr">
                            @foreach($events as $event)
                            <div class="events-slider-item">
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="{{ Voyager::image($event['img']) }}" alt>
                                    </div>
                                    <div class="details">
                                        <div class="inner">
                                            <h3><a href="{{ route('event.show' , $event['id']) }}">
                                                    {{ $event->getTranslatedAttribute('heading',  Session('lang') , 'en') }}
                                                </a></h3>
                                            <p>{{ $event->getTranslatedAttribute('created_at',  Session('lang') , 'en') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="events-slider-nav">
                            <div class="events-slider-arrows">
                                <div class="slider-prev"><i class="fi flaticon-back"></i></div>
                                <div class="slider-next"><i class="fi flaticon-next"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end events-section -->


    <!-- start partner-section -->
    <section class="partner-section" style="margin: 100px 0px 0px">
        <h2 class="hidden"></h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider" dir="ltr">
                        @foreach($brands as $brand)
                        <div>
                            <img src="{{ Voyager::image($brand['img']) }}" alt>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partner-section -->


    <!-- start blog-section -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s2">
                        <span>
                            {{ $titleHome->getTranslatedAttribute('title_section_blog',  Session('lang') , 'en') }}
                        </span>
                        <h2>
                            {{ $titleHome->getTranslatedAttribute('heading_blog',  Session('lang') , 'en') }}
                            <span>
                                {{ $titleHome->getTranslatedAttribute('span_heading_blog',  Session('lang') , 'en') }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids">
                        @foreach($blogs as $blog)
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{ Voyager::image($blog['img'])  }}" alt>
                            </div>
                            <div class="entry-details">
                                <h3><a href="{{ route('blog.show' , $blog['id']) }}"> {{ $blog->getTranslatedAttribute('heading',  Session('lang') , 'en') }} </a></h3>
                                <p class="date"> {{ $blog->getTranslatedAttribute('created_at' , Session('lang') , 'en') }} </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('blog.index') }}"  class="theme-btn-s4"> {{ $titleHome->getTranslatedAttribute('button_blog' , Session('lang') , 'en') }} </a>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-section -->
</div>
<!-- end of page-wrapper -->
@endsection
