@extends('layouts.index')
@section('title')
    IIT Alumni
@endsection

@section('css')

@endsection

@section('content')
    @extends('partials._slider')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span class="title-large text-uppercase letter-spacing-1 font-weight-600 black-text">Who are we</span>
                    <div class="separator-line-thick bg-fast-pink no-margin-lr"></div>
                    <p class="no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                        it to make a type specimen book.</p>
                    <a class="highlight-button-black-border btn btn-small no-margin-bottom inner-link sm-margin-bottom-ten" href="#">Read More</a>
                </div>
                <div class="col-md-3 col-sm-6 text-center col-md-offset-1 xs-margin-bottom-ten">
                    <img src="{{ asset('vendor/hcode/images/spa-img3.jpg') }}" class="xs-img-full" alt="" />
                </div>
                <div class="col-md-3 col-sm-6 text-center ">
                    <img src="{{ asset('vendor/hcode/images/spa-img4.jpg') }}" class="xs-img-full" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 13px 0;">
        <div class="container">
            <div class="row">
                <!-- features item -->
                <div class="col-md-4 col-sm-6 sm-margin-bottom-ten xs-text-center">
                    <h3>news</h3>
                    <span class="title-small text-uppercase font-weight-700 black-text letter-spacing-1 margin-seven display-block">We're ready
                        <br> to start now</span>
                    <p class="margin-ten no-margin-top width-90 xs-center-col xs-display-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the text.</p>
                    <a href="#" class="highlight-link text-uppercase white-text">Read More
                        <i class="fa fa-long-arrow-right extra-small-icon white-text"></i>
                    </a>
                </div>
                <!-- end features item -->
                <!-- features item -->
                <div class="col-md-4 col-sm-6 sm-margin-bottom-ten xs-text-center">
                    <h3>Event</h3>
                    <span class="title-small text-uppercase font-weight-700 black-text letter-spacing-1 margin-seven display-block">Always on time
                        <br> call support</span>
                    <p class="margin-ten no-margin-top width-90 xs-center-col xs-display-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the text.</p>
                    <a href="#" class="highlight-link text-uppercase white-text">Read More
                        <i class="fa fa-long-arrow-right extra-small-icon white-text"></i>
                    </a>
                </div>
                <!-- end features item -->
                <!-- features item -->
                <div class="col-md-4 col-sm-6 xs-margin-bottom-ten xs-text-center">
                    <h3>Notice</h3>
                    <span class="title-small text-uppercase font-weight-700 black-text letter-spacing-1 margin-seven display-block">We Deliver the
                        <br> highest quality</span>
                    <p class="margin-ten no-margin-top width-90 xs-center-col xs-display-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the text.</p>
                    <a href="#" class="highlight-link text-uppercase white-text">Read More
                        <i class="fa fa-long-arrow-right extra-small-icon white-text"></i>
                    </a>
                </div>
                <!-- end features item -->

            </div>
        </div>
    </section>
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <!-- call to action -->
                <div class="col-md-7 col-sm-12 text-center center-col">
                    <p class="title-large text-uppercase letter-spacing-1 black-text font-weight-600 wow fadeIn">Creative thinkers, clever developer and marketing superheroes apply here</p>
                    <a href="contact-us.html" class="highlight-button-black-border btn margin-six wow fadeInUp">Apply Now!</a>
                </div>
                <!-- end call to action -->
            </div>
        </div>
    </section>
    <!-- content section -->
    <section class="wow fadeIn blog-full-width-section">
        <div class="container-fuild">
            <div class="row blog-full-width no-margin xs-no-padding">
                <!-- post item -->
                <div class="col-md-3 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="300ms">
                    <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/blog-post16.jpg') }}" alt=""/></a></div>
                    <div class="blog-details">
                        <div class="blog-date"><a href="blog-masonry-2columns.html">Paul Scrivens</a> | 02 January 2015</div>
                        <div class="blog-title"><a href="blog-single-right-sidebar.html">How To Streamline Creative Dialogue</a></div>
                        <div class="blog-short-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        <div class="separator-line bg-black no-margin-lr"></div>
                        <div><a href="#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                    </div>
                </div>
                <!-- end post item -->
                <!-- post item -->
                <div class="col-md-3 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="600ms">
                    <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/blog-post19.jpg') }}" alt=""/></a></div>
                    <div class="blog-details">
                        <div class="blog-date"><a href="blog-masonry-2columns.html">Paul Scrivens</a> | 02 January 2015</div>
                        <div class="blog-title"><a href="blog-single-right-sidebar.html">How To Transform Your Problem-Solving</a></div>
                        <div class="blog-short-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        <div class="separator-line bg-black no-margin-lr"></div>
                        <div><a href="#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                    </div>
                </div>
                <!-- end post item -->
                <!-- post item -->
                <div class="col-md-3 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="900ms">
                    <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/blog-post18.jpg') }}" alt=""/></a></div>
                    <div class="blog-details">
                        <div class="blog-date"><a href="blog-masonry-2columns.html">Nathan Ford</a> | 02 January 2015</div>
                        <div class="blog-title"><a href="blog-single-right-sidebar.html">A Frank Lloyd Wright Approach To Digital</a></div>
                        <div class="blog-short-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        <div class="separator-line bg-black no-margin-lr"></div>
                        <div><a href="#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                    </div>
                </div>
                <!-- end post item -->
                <!-- post item -->
                <div class="col-md-3 col-sm-6 col-xs-6 blog-listing wow fadeInUp" data-wow-duration="1200ms">
                    <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="{{ asset('vendor/hcode/images/blog-post17.jpg') }}" alt=""/></a></div>
                    <div class="blog-details">
                        <div class="blog-date"><a href="blog-masonry-2columns.html">Aarron Walter</a> | 02 January 2015</div>
                        <div class="blog-title"><a href="blog-single-right-sidebar.html">Design Principles: Visual Weight And Direction</a></div>
                        <div class="blog-short-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        <div class="separator-line bg-black no-margin-lr"></div>
                        <div><a href="#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                    </div>
                </div>
                <!-- end post item -->
            </div>
            <div class="row no-margin">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                    <!-- pagination -->
                    <div class="pagination">
                        <a href="#"><img src="{{ asset('vendor/hcode/images/arrow-pre-small.png') }}" alt=""/></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#" class="active">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><img src="{{ asset('vendor/hcode/images/arrow-next-small.png') }}" alt=""/></a>
                    </div>
                    <!-- end pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end content section -->
@endsection

@section('js')

@endsection