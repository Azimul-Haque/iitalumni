@extends('layouts.index')
@section('title')
    IIT Alumni | Blogs
@endsection

@section('css')

@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin page-title page-title-small bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                    <!-- page title -->
                    <h1 class="black-text">Blogs...</h1>
                    <!-- end page title -->
                </div>
                <div class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                    <!-- breadcrumb -->
                    <ul>
                        <li><a href="{{ route('index.index') }}">Home</a></li>
                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- end head section -->

    <!-- content section -->
    <section class="wow fadeIn no-margin-top">
        <div class="container">
            <div class="row">
                <!-- content  -->
                <div class="col-md-8 col-sm-8">
                    {{-- <h2 class="hidden-xs margin-four">Blogs</h2>
                    <h2 class="visible-xs margin-ten xs-no-margin-bottom">Blogs</h2> --}}
                    <!-- post item -->
                    @foreach ($blogs as $blog)
                    <div class="blog-listing blog-listing-classic no-margin-top wow fadeIn">
                        <!-- post image -->
                        @if($blog->featured_image != null)
                            <div class="blog-image"><a href="{{ route('blog.single', $blog->slug) }}"><img src="{{ asset('images/blogs/'.$blog->featured_image) }}" alt="" style="width: 100%;" /></a></div>
                        @endif
                        <!-- end post image -->
                        <div class="blog-details">
                            <div class="blog-date">Posted by <a href="{{ route('blogger.profile', $blog->user->unique_key) }}">{{ $blog->user->name }}</a> | {{ date('F d, Y', strtotime($blog->created_at)) }} | <a href="blog-masonry-3columns.html">{{ $blog->category->name }}</a> </div>
                            <div class="blog-title"><a href="{{ route('blog.single', $blog->slug) }}">
                                {{ $blog->title }}
                            </a></div>
                            <div style="text-align: justify;">
                                @if(strlen(strip_tags($blog->body))>600)
                                    {{ mb_substr(strip_tags($blog->body), 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+500))." [...] " }}

                                @else
                                    {{ strip_tags($blog->body) }}
                                @endif
                            </div>
                            <div class="separator-line bg-black no-margin-lr margin-four"></div>
                            <div>
                                <a href="#!" class="blog-like"><i class="fa fa-heart-o"></i>{{ $blog->likes }} Like(s)</a>
                                <a href="#!" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a>
                            </div>
                            <a class="highlight-button btn btn-small xs-no-margin-bottom" href="{{ route('blog.single', $blog->slug) }}">Continue Reading</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- end post item -->
                    {{-- paginating --}}
                    {{ $blogs->links() }}

                </div>
                <!-- end content  -->
                <!-- sidebar  -->
                <div class="col-md-3 col-sm-4 col-md-offset-1 xs-margin-top-ten sidebar">
                    <!-- widget  -->
                    <div class="widget">
                        <form>
                            <i class="fa fa-search close-search search-button"></i>
                            <input type="text" placeholder="Search..." class="search-input" name="search">
                        </form>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Categories</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a href="blog-masonry-3columns.html">Web Design <span>48</span></a></li>
                                <li><a href="blog-masonry-3columns.html">Featured Blog<span>25</span></a></li>
                                <li><a href="blog-masonry-3columns.html">Photography Idea<span>32</span></a></li>
                                <li><a href="blog-masonry-3columns.html">Design Tutorials<span>38</span></a></li>
                                <li><a href="blog-masonry-3columns.html">News and Events<span>40</span></a></li>
                                <li><a href="blog-masonry-3columns.html">Arts and Entertainment<span>28</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Popular posts</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body">
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img58.jpg" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Elements of a Launch Page</a> Simon Schmid - 02 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img60.jpg" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">The Art of Design Etiquette</a> Paul Scrivens - 06 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img61.jpg" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Easier is Better</a> Paul Boag - 08 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img62.jpg" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Successful Websites</a> Simon Schmid - 16 January</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Tags Cloud</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body tags">
                            <a href="blog-masonry-3columns.html">Advertisement</a>
                            <a href="blog-masonry-3columns.html">Blog</a>
                            <a href="blog-masonry-3columns.html">Fashion</a>
                            <a href="blog-masonry-3columns.html">Inspiration</a>
                            <a href="blog-masonry-3columns.html">Smart Quotes</a>
                            <a href="blog-masonry-3columns.html">Conceptual</a>
                            <a href="blog-masonry-3columns.html">Artistry</a>
                            <a href="blog-masonry-3columns.html">Unique</a>
                        </div>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Recent Comments</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body">
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Elements of A Launch Page</a> Simon Schmid - 02 January</div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">The Art of Design Etiquette</a> Paul Scrivens - 06 January</div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Easier is Better Than Better</a> Paul Boag - 08 January</div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Creating Successful Websites</a> Simon Schmid - 16 January</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Text Widget</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                    <!-- end widget  -->
                    <!-- widget  -->
                    <div class="widget">
                        <h5 class="widget-title font-alt">Archive</h5>
                        <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a href="blog-masonry-3columns.html">December 2014<span>48</span></a></li>
                                <li><a href="blog-masonry-3columns.html">January 2015<span>25</span></a></li>
                                <li><a href="blog-masonry-3columns.html">February 2015<span>32</span></a></li>
                                <li><a href="blog-masonry-3columns.html">March 2015<span>38</span></a></li>
                                <li><a href="blog-masonry-3columns.html">April 2015<span>40</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget  -->
                </div>
                <!-- end sidebar  -->
            </div>
        </div>
    </section>
    <!-- end content section -->
@endsection

@section('js')

@endsection