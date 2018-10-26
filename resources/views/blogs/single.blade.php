@extends('layouts.index')
@section('title')
    IIT Alumni | {{ $blog->slug }}
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
@if($blog->featured_image != null)
    <meta name="og:image" content="{{ asset('images/blogs/'.$blog->featured_image) }}">
@else
    <meta name="og:image" content="{{ asset('images/600x315.png') }}">
@endif

<meta name="og:url" content="{{ Request::url() }}">
<meta name="og:site_name" content="IIT Alumni Association">
<meta name="og:locale" content="en_US">
<meta name="fb:admins" content="100001596964477">
<meta name="fb:app_id" content="163879201229487">
<meta name="og:type" content="article">
<!-- Open Graph - Article -->
<meta name="article:section" content="{{ $blog->category->name }}">
<meta name="article:published_time" content="{{ $blog->created_at}}">
<meta name="article:author" content="{{ $blog->user->name }}">
<meta name="article:tag" content="{{ $blog->category->name }}">
<meta name="article:modified_time" content="{{ $blog->updated_at}}">
@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin page-title page-title-small bg-gray xs-display-none">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                    <!-- page title -->
                    <h1 class="black-text"></h1>
                    <!-- end page title -->
                </div>
                <div class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                    <!-- breadcrumb -->
                    <ul>
                        <li><a href="{{ route('index.index') }}">Home</a></li>
                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                        <li>Single BLog</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- end head section -->
    <!-- content section -->
    <section class="wow fadeIn xs-margin-top-ten no-margin-top">
        <div class="container">
            <div class="row">
                <!-- content  -->
                <div class="col-md-8 col-sm-8">
                    <!-- post title  -->
                    <h2 class="blog-details-headline text-black">{{ $blog->title }}</h2>
                    <!-- end post title  -->
                    <!-- post date and categories  -->
                    <div class="blog-date no-padding-top">Posted by <a href="{{ route('blogger.profile', $blog->user->unique_key) }}">{{ $blog->user->name }}</a> | {{ date('F d, Y', strtotime($blog->created_at)) }} | <a href="blog-masonry-3columns.html">{{ $blog->category->name }}</a> </div>
                    <!-- end date and categories   -->
                    <!-- post image -->
                    @if($blog->featured_image != null)
                        <div class="blog-image margin-eight"><img src="{{ asset('images/blogs/'.$blog->featured_image) }}" alt="" style="width: 100%;"></div>
                    @endif

                    <!-- end post image -->
                    <!-- post details text -->
                    <div class="blog-details-text">
                        <p>
                            {!! $blog->body !!}
                            {{-- solved the strong, em and p problem --}}
                            @if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<strong>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</strong>"))

                            @else
                              </strong>
                            @endif
                            @if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<b>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</b>"))

                            @else
                              </b>
                            @endif
                            @if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<em>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</em>"))

                            @else
                              </em>
                            @endif
                            @if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<p>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</p>"))
                            @else
                              </p>
                            @endif
                            {{-- solved the strong, em and p problem --}}
                        </p>

                        <div class="separator-line bg-black no-margin-lr margin-four"></div>
                        <div>
                            <a href="#!" class="blog-like" @if(Auth::check()) onclick="likeBlog({{ Auth::user()->id }}, {{ $blog->id }})" @endif>
                                <i class="fa fa-heart-o" id="like_icon"></i>
                                <span id="like_span">{{ $blog->likes }} Like(s)</span>
                            </a>
                            <a href="#" class="blog-share" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share-alt"></i>Share</a>
                            <a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a>
                        </div>
                        <!-- end post tags -->
                    </div>
                    <!-- end post details text -->
                    <!-- about author -->
                    <div class="text-center margin-ten no-margin-bottom about-author text-left bg-gray">
                        <div class="blog-comment text-left clearfix no-margin">
                            <!-- author image -->
                            <a class="comment-avtar no-margin-top"><img src="{{ asset('images/users/'.$blog->user->image) }}" alt=""></a>
                            <!-- end author image -->
                            <!-- author text -->
                            <div class="comment-text overflow-hidden position-relative">
                                <h5 class="widget-title">About The Author</h5>
                                <a href="{{ route('blogger.profile', $blog->user->unique_key) }}"><p class="blog-date no-padding-top">{{ $blog->user->name }}</p></a>
                                <p class="about-author-text no-margin">
                                    {{ $blog->user->degree }} {{ $blog->user->batch }}, {{ $blog->user->passing_year }}<br/>
                                    {{ $blog->user->designation }}, {{ $blog->user->current_job }}
                                </p>
                            </div>
                            <!-- end author text -->
                        </div>
                    </div>
                    <!-- end about author -->
                    <!-- social icon -->
                    <div class="text-center border-bottom margin-ten padding-four no-margin-top">
                        <a href="{{ $blog->user->fb }}" class="btn social-icon social-icon-large button"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $blog->user->twitter }}" class="btn social-icon social-icon-large button"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $blog->user->gplus }}" class="btn social-icon social-icon-large button"><i class="fa fa-google-plus"></i></a>
                        <a href="{{ $blog->user->linkedin }}" class="btn social-icon social-icon-large button"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!-- end social icon -->
                    <!-- post comment -->
                    <div class="blog-comment-main xs-no-padding-top">
                        <h5 class="widget-title">Blog Comments</h5>
                        <div class="blog-comment">
                            <a class="comment-avtar"><img src="{{ asset('vendor/hcode/images/avtar5.jpg') }}" alt=""></a>
                            <div class="comment-text overflow-hidden position-relative">
                                <p class="blog-date no-padding-top"><a href="#">Nathan Ford</a>, March 09, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="blog-comment clearfix">
                                <a class="comment-avtar"><img src="{{ asset('vendor/hcode/images/avtar6.jpg') }}" alt=""></a>
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top"><a href="#">Paul Scrivens</a>, March 09, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <a class="comment-avtar"><img src="{{ asset('vendor/hcode/images/avtar7.jpg') }}" alt=""></a>
                            <div class="comment-text overflow-hidden position-relative">
                                <p class="blog-date no-padding-top"><a href="#">Colin Powell</a>, March 07, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end post comment -->
                    <!-- comment form -->
                    <div id="addcomment" class="blog-comment-form-main">
                        <h5 class="widget-title margin-five no-margin-top">Add a comment</h5>
                        <div class="blog-comment-form">
                            <form>
                                <!-- input -->
                                <input type="text" name="name" placeholder="Name">
                                <!-- end input -->
                                <!-- input  -->
                                <input type="text" name="email" placeholder="Email">
                                <!-- end input -->
                                <!-- input  -->
                                <input type="text" name="website" placeholder="Website">
                                <!-- end input -->
                                <!-- textarea  -->
                                <textarea name="comment" placeholder="Comment"></textarea>
                                <!-- end textarea  -->
                                <!-- required  -->
                                <span class="required">*Please complete all fields correctly</span>
                                <!-- end required  -->
                                <!-- button  -->
                                <input type="submit" name="send message" value="send message" class="highlight-button-dark btn btn-small no-margin-bottom">
                                <!-- end button  -->
                            </form>
                        </div>
                    </div>
                    <!-- end comment form -->
                </div>
                <!-- end content  -->
                <!-- sidebar  -->
                <div class="col-md-3 col-sm-4 col-md-offset-1 sidebar xs-margin-top-ten">
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
                                    <a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/portfolio-img58.jpg') }}" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Elements of a Launch Page</a> Simon Schmid - 02 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/portfolio-img60.jpg') }}" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">The Art of Design Etiquette</a> Paul Scrivens - 06 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/portfolio-img61.jpg') }}" alt=""/></a>
                                    <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Easier is Better</a> Paul Boag - 08 January</div>
                                </li>
                                <li class="clearfix">
                                    <a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/portfolio-img62.jpg') }}" alt=""/></a>
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

    <!-- Share Modal -->
    <div class="modal fade" id="shareModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this Blog</h4>
            </div>
            <div class="modal-body">
              <p>
              <!-- social icon -->
              <div class="text-center margin-ten padding-four no-margin-top">
                  <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" class="btn social-icon social-icon-large button" onclick="window.open(this.href,'newwindow', 'width=500,height=400');  return false;"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/intent/tweet?url={{ Request::url() }}" class="btn social-icon social-icon-large button" onclick="window.open(this.href,'newwindow', 'width=500,height=400');  return false;"><i class="fa fa-twitter"></i></a>
                  <a href="https://plus.google.com/share?url={{ Request::url() }}" class="btn social-icon social-icon-large button" onclick="window.open(this.href,'newwindow', 'width=500,height=400');  return false;"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url()}}&title=IIT%20Alumni%20Association&summary={{ $blog->title }}&source=IITAlumni" class="btn social-icon social-icon-large button" onclick="window.open(this.href,'newwindow', 'width=500,height=400');  return false;"><i class="fa fa-linkedin"></i></a>
              </div>
              <!-- end social icon -->
              </p>
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> --}}
          </div>
          
        </div>
    </div>
@endsection

@section('js')
    @if(Auth::check())
    <script type="text/javascript">
        $(document).ready(function(){
            checkLiked();
        });

        // like or dislike
        function likeBlog(user_id, blog_id) {
          //console.log(user_id +','+ blog_id);
          $.get(window.location.protocol + "//" + window.location.host + "/like/" + user_id + "/" + blog_id, function(data, status){
              //console.log("Data: " + data + "\nStatus: " + status);
              checkLiked();
          });
        }
        function checkLiked() {
          $.get(window.location.protocol + "//" + window.location.host + "/check/like/" + {{ Auth::user()->id }} + "/" + {{ $blog->id }}, function(data, status){
              //console.log(data);
              if(data.status == 'liked') {
                $('#like_span').text(data.likes +' Liked');
                $('#like_icon').css('color', 'red');
                $('#like_icon').attr('class', 'fa fa-heart');
              } else {
                $('#like_span').text(data.likes +' Like');
                $('#like_icon').css('color', '');
                $('#like_icon').attr('class', 'fa fa-heart-o');
              }
          });
        }
    </script>
    @endif
@endsection