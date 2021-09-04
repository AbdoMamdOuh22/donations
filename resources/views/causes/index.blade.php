@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <img src="{{ Voyager::image($cover['cover_causes']) }}" style="background-size: cover; background-position: center; width: 100%">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2>  {{ $cover->getTranslatedAttribute('title_causes_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}
                                    </a></li>
                                <li>  {{ $cover->getTranslatedAttribute('link_causes' , Session('lang') , 'en') }} </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start causes-section -->
    <section class="causes-section causes-section-pg section-padding" dir="ltr">
        <div class="container-fluid">
            <div class="section-title-s2">
                <span>  {{ $titleCauses->getTranslatedAttribute('title_section_causes' , Session('lang') , 'en') }} </span>
                <h2> {{$titleCauses->getTranslatedAttribute('heading_causes' , Session('lang') , 'en') }}  <span>
                {{$titleCauses->getTranslatedAttribute('span_heading_causes' , Session('lang') , 'en') }}
                </span></h2>
            </div>
            <div class="content-area causes-slider">
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
    </section>
    <!-- end causes-section -->

@endsection


