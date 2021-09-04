@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <img src="{{ Voyager::image($cover['cover_contact']) }}" style="background-size: cover; background-position: center; width: 100%">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2> {{ $cover->getTranslatedAttribute('title_contact_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}
                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('link_contact' , Session('lang') , 'en') }}
                                </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start contact-section -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3">
                        <span>
                            {{ $titleContact->getTranslatedAttribute('title_section_contact' , Session('lang') , 'en') }}
                        </span>
                        <h2>
                            {{ $titleContact->getTranslatedAttribute('heading_contact' , Session('lang') , 'en') }}
                        </h2>
                        <p>
                            {{ $titleContact->getTranslatedAttribute('decs_contact' , Session('lang') , 'en') }}
                        </p>
                    </div>
                </div>
                <div class="col col-xs-12">
                    <div class="contact-info-grids">
                        @foreach($contactUS as $contact_us)
                        <div class="grid">
                            <i class="fi flaticon-house"></i>
                            <h4>
                                {{ $contact_us->getTranslatedAttribute('title_icon' , Session('lang') , 'en') }}
                            </h4>
                            <p>
                                {{ $contact_us->getTranslatedAttribute('decs_icon1' , Session('lang') , 'en') }}
                            </p>
                            <p>
                                {{ $contact_us->getTranslatedAttribute('decs_icon2' , Session('lang') , 'en') }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="contact-form-area">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="contact-text">
                            <h3> {{ $titleContact->getTranslatedAttribute('heading_form_contact' , Session('lang') , 'en') }} </h3>
                            <p> {{ $titleContact->getTranslatedAttribute('decs_form_contact' , Session('lang') , 'en') }} </p>
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="contact-form">
                            <form method="post" action="{{ route('sendEmail') }}" >
                                @csrf
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                                <div >
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                </div>
                                <div style="width: 100%;">
                                    <input type="text" style="border-right: 2px solid #d4d9e0 " class="form-control" name="phone" id="phone" placeholder="Phone*">
                                </div>

                                <div class="fullwidth">
                                    <textarea class="form-control" name="msm"  id="note" placeholder="Case Description..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn-s6"><i class="fi flaticon-like"></i> Submit It Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-section -->
    <!-- end contact-section -->


    <!--  start contact-map -->
    <section class="contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
        </div>
    </section>
    <!-- end contact-map -->
@endsection

