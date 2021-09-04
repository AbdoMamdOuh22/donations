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
                            <h2> {{ $cover->getTranslatedAttribute('event_single' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}
                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('event_single_link' , Session('lang') , 'en') }}
                                </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start event-single-section -->
    <section class="event-single-section section-padding">
        <div class="container">
            <div class="row">
                        <div class="col col-md-6">
                            <div class="event-single-img">
                                <img src="{{ Voyager::image($event['img']) }}" alt>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col col-lg-6">
                            <div class="event-text" style="margin: 0px">
                                <h1>
                                        {{ $event->getTranslatedAttribute('heading' , Session('lang') , 'en') }}
                                </h1>
                                <p>
                                    {{ $event->getTranslatedAttribute('decs' , Session('lang') , 'en') }}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end event-single-section -->
@endsection
