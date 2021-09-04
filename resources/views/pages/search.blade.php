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
                            <h2> {{ $cover->getTranslatedAttribute('title_blog_cover' , Session('lang') , 'en') }} </h2>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('index') }}">
                                        {{ $cover->getTranslatedAttribute('link_home' , Session('lang') , 'en') }}                                    </a></li>
                                <li>
                                    {{ $cover->getTranslatedAttribute('link_blog' , Session('lang') , 'en') }}                                    </a></li>
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
                <div class="col col-md-8">
                    <div class="blog-content">
                        @foreach($allBlogs as $oneBlog)
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="{{ Voyager::image($oneBlog['img']) }}" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="date"> {{ $oneBlog->getTranslatedAttribute('created_at' , Session('lang') , 'en') }}</div>
                                    <h3><a href="{{ route('blog.show' , $oneBlog['id']) }}">{{ $oneBlog->getTranslatedAttribute('heading' , Session('lang') , 'en') }}  </a></h3>
                                    <p> {{ $oneBlog->getTranslatedAttribute('decs' , Session('lang') , 'en') }} </p>
                                    <a href="{{ route('blog.show' , $oneBlog['id']) }}" class="read-more"> {{ $oneBlog->getTranslatedAttribute('button' , Session('lang') , 'en') }} </a>
                                </div>
                            </div>
                        @endforeach

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
                <div class="col col-md-4">
                    <div class="blog-sidebar">
                        <div class="widget search-widget" dir="ltr">
                            <h3>Search</h3>
                            <form method="post" action="{{ route('search') }}">
                                @csrf
                                <div>
                                    <input type="text" name="searchBlog" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget category-widget" dir="ltr">
                            <h3>Categories</h3>
                            <ul>
                                @foreach($newcategorys as  $newcategoryNum)
                                    <li><a href="{{ route('newcategors.show' , $newcategoryNum['id']) }}">
                                            {{ $newcategoryNum->getTranslatedAttribute('name' , Session('lang') , 'en') }}
                                            <span> {{$num[$loop->index]}} </span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-pg-section -->

@endsection
