@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <img src="{{ Voyager::image($cover['cover_event']) }}" style="background-size: cover; background-position: center; width: 100%">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2> {{ $cover->getTranslatedAttribute('title_event_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}
                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('link_event' , Session('lang') , 'en') }}
                                </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start blog-pg-section -->
    <section class="blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-content">
                            <div class="events-slider-item">
                                <div class="grid" style="margin: 0px 0px 50px">
                                    <div class="img-holder">
                                        <img src="{{ Voyager::image($event['img']) }}" alt>
                                    </div>
                                    <div class="entry-details" style="padding: 25px 0px 0px">
                                        <h3><a href="{{ route('event.show', $event['id']) }}" style="color: #0b0b0b">
                                                {{ $event->getTranslatedAttribute('heading' , Session('lang') , 'en') }}
                                            </a></h3><p> {{ $event->getTranslatedAttribute('title_decs' , Session('lang') , 'en') }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-wrapper pagination-wrapper-left">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fi flaticon-back"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fi flaticon-next"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-pg-section -->
@endsection
