@extends('master')
@section('title')
        {{ $cover['causes_single'] }}
@endsection
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
                            <h2>  {{ $cover->getTranslatedAttribute('causes_single' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}
                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('causes_single_link' , Session('lang') , 'en') }}
                                </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start case-single-section -->
    <!-- start case-single-section -->
    <section class="case-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-7">
                    <div class="img-holder big-img">
                        <img src="{{ Voyager::image($cause['img']) }}" alt="" width="100%">
                    </div>
                </div>
                <div class="col col-lg-4 col-md-5">
                    <div class="case-info-area">
                        <h3> {{$cause->getTranslatedAttribute('heading' , Session('lang') , 'en') }} </h3>
                        <div class="goal-raised" style="margin: 25px 0px">
                            <div><span>{{ $cause->getTranslatedAttribute('donated',  Session('lang') , 'en') }} :
                                {{ $cause->getTranslatedAttribute('donated_price',  Session('lang') , 'en') }}
                            </div>
                            <div><span>{{$cause->getTranslatedAttribute('amount_required' , Session('lang') , 'en') }} :
                                {{$cause->getTranslatedAttribute('amount_required_price' , Session('lang') , 'en') }}
                            </div>
                        </div>

                        <p> {{ $cause->getTranslatedAttribute('decs' , Session('lang') , 'en') }} </p>
                        <div class="social-area">
                            <ul>
                                <li><a href="{{ Session()->get('facebook') }}"><i class="ti-facebook"></i></a></li>
                                <li><a href="{{ Session()->get('twitter') }}"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="{{ Session()->get('pinterest') }}"><i class="ti-pinterest"></i></a></li>
                            </ul>

                            <span>
                                {{$titleCauses->getTranslatedAttribute('follow' , Session('lang') , 'en') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row donate-area-bottom">
                <div class="col col-md-12">
                    <div class="donate-area-wrapper">
                        <form method="post" id="give-form-232-1" class="give-form give-form-232 give-form-type-multi" action="{{route('store')}}">
                          @csrf
                            <div class="give-total-wrap">
                            </div>


                            <div id="give_purchase_form_wrap">
                                <fieldset id="give_checkout_user_info" class="">
                                    <p id="give-first-name-wrap" class="form-row form-row-first form-row-responsive">
                                            <span class="give-required-indicator"></span>
                                            <span class="give-tooltip hint--top hint--medium hint--bounce" aria-label="First Name is used to personalize your donation record." rel="tooltip">
                                                </span>
                                        <input class="give-input required" type="text" name="first_name" autocomplete=" given-name"
                                               placeholder="First Name" id="give-first"
                                               value="" required aria-required="true" />
                                    </p>

                                    <p id="give-last-name-wrap" class="form-row form-row-last form-row-responsive">
                                            <span class="give-tooltip hint--top hint--medium hint--bounce" aria-label="First Name is used to personalize your donation record." rel="tooltip">
                                                </span>

                                        <input class="give-input" type="text" name="last_name" autocomplete="family-name"
                                               id="give-last" placeholder="Last Name" value="" />
                                    </p>


                                    <p id="give-email-wrap" class="form-row form-row-wide">
                                            <span class="give-required-indicator"></span>
                                            <span class="give-tooltip hint--top hint--medium hint--bounce" aria-label="First Name is used to personalize your donation record." rel="tooltip">
                                                </span>
                                        <input class="give-input required" type="email"
                                               name="email_address" autocomplete="email" placeholder="Email Address" id="give-email"
                                               value="" required aria-required="true" />
                                    </p>

                                    <p id="give-anonymous-donation-wrap" class="form-row form-row-wide">
                                        <label class="give-label" for="give-anonymous-donation">
                                            <input type="checkbox" class="give-input" name="anonymous_donation" id="give-anonymous-donation" value="1"
                                            > Make this an anonymous donation.
                                            <span class="give-tooltip hint--top hint--medium hint--bounce" aria-label="First Name is used to personalize your donation record." rel="tooltip">
                                                    <i class="give-icon give-icon-question"></i>
                                                </span>
                                        </label>
                                    </p>

                                    <p id="give-comment-wrap" class="form-row form-row-wide">

                                            <span class="give-tooltip hint--top hint--medium hint--bounce" aria-label="First Name is used to personalize your donation record." rel="tooltip">
                                                </span>
                                        <textarea class="give-input" name="comment" placeholder="Leave a comment" id="give-comment"></textarea>
                                    </p>
                                </fieldset>

                                <fieldset id="give_purchase_submit" class="give-donation-submit">
                                    <p id="give-final-total-wrap" class="form-wrap ">
                                        <span class="give-donation-total-label"> Donation Total:</span>
                                        <span class="give-final-total-amount" data-total="20.00"> &#36;20.00</span>
                                    </p>
                                    <input type="hidden" name="give_action" value="purchase"/>
                                    <input type="hidden" name="give-gateway" value="manual"/>
                                    <div class="give-submit-button-wrap give-clearfix">
                                        <input type="submit" class="give-submit give-btn" id="give-purchase-button" name="give-purchase" value="Donate Now" data-before-validation-label="Donate Now"/>
                                        <span class="give-loading-animation"></span>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end case-single-section -->
@endsection
