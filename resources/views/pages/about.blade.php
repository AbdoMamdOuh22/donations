@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start page-title -->
    <section class="page-title">
    <img src="{{ Voyager::image($cover['cover_about']) }}" style="background-size: cover; background-position: center; width: 100%">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">

                            <h2> {{ $cover->getTranslatedAttribute('title_about_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}"> {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }} </a></li>
                                <li> {{ $cover->getTranslatedAttribute('link_about' , Session('lang') , 'en') }} </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->

    <!-- start about-page-section -->
    <section class="about-page-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3">
                        <span> {{ $titleAbout->getTranslatedAttribute('title_section_about' , Session('lang') , 'en') }} </span>
                        <h2> {{ $titleAbout->getTranslatedAttribute('heading_about' , Session('lang') , 'en') }} </h2>
                        <p> {{ $titleAbout->getTranslatedAttribute('decs_about' , Session('lang') , 'en') }} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="about-features-grid">
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-pencil-case"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title1' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs1' , Session('lang') , 'en') }} </p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-fruits"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title2' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs2' , Session('lang') , 'en') }} </p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-donation"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title3' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs3' , Session('lang') , 'en') }} </p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-charity"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title4' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs4' , Session('lang') , 'en') }} </p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-smile"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title5' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs5' , Session('lang') , 'en') }} </p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-like"></i>
                            </div>
                            <h3> {{ $aboutIcon->getTranslatedAttribute('icon_title6' , Session('lang') , 'en') }} </h3>
                            <p> {{ $aboutIcon->getTranslatedAttribute('icon_decs6' , Session('lang') , 'en') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-page-section -->


    <!-- start mission-vision-section -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="mission-vision-grids clearfix">
                        @foreach($ourVisions as $ourVision)
                        <div class="grid">
                            <div class="overlay"></div>
                            <h3> {{ $ourVision->getTranslatedAttribute('heading' , Session('lang') , 'en') }} </h3>
                            <p> {{ $ourVision->getTranslatedAttribute('decs' , Session('lang') , 'en') }} </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end mission-vision-section -->


    <!-- start partner-section -->
    <section class="partner-section" style="margin: 0px;">
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

    <!-- start team-section -->
    <section class="team-section section-padding">
        <div class="content-area">
            <div class="first-row clearfix">
                <div class="grid"></div>
                <div class="grid info-grid">
                    <div class="section-title">
                        <span> {{ $titleAbout->getTranslatedAttribute('title_section_team' , Session('lang') , 'en') }} </span>
                        <h2> {{ $titleAbout->getTranslatedAttribute('heading_team' , Session('lang') , 'en') }} </h2>
                    </div>
                    <div class="team-details">
                        <p>  {{ $titleAbout->getTranslatedAttribute('decs_team' , Session('lang') , 'en') }} </p>
                    </div>
                </div>
                @foreach($teams as $team)
                <div class="grid">
                    <div class="img-holder">
                        <img src="{{ Voyager::image($team['img']) }}" alt>
                    </div>
                    <div class="member-info">

                        <h4> {{ $team->getTranslatedAttribute('name' , Session('lang') , 'en') }} </h4>
                        <p> {{ $team->getTranslatedAttribute('info' , Session('lang') , 'en') }} </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div> <!-- end content-area -->
    </section>
    <!-- end team-section -->
@endsection

