@extends('master')
@section('logo')
    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-3.png') }}" alt></a>
@endsection
@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <img src="{{ Voyager::image($cover['cover_blog']) }}" style="background-size: cover; background-position: center; width: 100%">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2> {{ $cover->getTranslatedAttribute('title_blogsingle_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('link_blogsingle' , Session('lang') , 'en') }}                                    </a></li>
                                </li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start blog-single-section -->
    <section class="blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 col-md-offset-1">
                    <div class="blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{ Voyager::image($Blog['img']) }}" alt>
                            </div>
                            <div class="date-entry-meta">

                            </div>
                            <h2>{{ $Blog->getTranslatedAttribute('heading' , Session('lang') , 'en') }}</h2>
                            <p> {{ $Blog->getTranslatedAttribute('decs' , Session('lang') , 'en') }} </p>
                        </div>

                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">5 Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-theme">
                                                <div class="comment-image"><img src="{{}}" alt></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Vodor <span class="comments-date">says Oct 15, 2020 at 11:00am</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>When Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Add your comment</h3>
                                <form method="post" id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Name" type="email">
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end comments-area -->
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-section -->


    <!-- start instagram-section -->
    <section class="instagram-section">
        <h2 class="hidden">Instagran</h2>
        <div class="instagram-grids">
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-1.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-2.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-3.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-4.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-5.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-6.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-7.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-8.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-9.jpg" alt></a>
            </div>
            <div class="grid">
                <a href="#"><img src="assets/images/instagram/img-10.jpg" alt></a>
            </div>
        </div>
    </section>
    <!-- end instagram-section -->
@endsection


