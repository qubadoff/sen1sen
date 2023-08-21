@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Site name"))

@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Our Projects")}}</h1>
                    <p class="desc">Share your stories and news with everyone.</p>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-middle">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <article class="post post-grid format-video post-featured">
                                        <div class="entry-thumbnail">
                                            <a href="#" title="Top 6 Membership Sites for Beginners">
                                                <img src="{{ url('/') }}/assets/images/post-01.jpg" alt="Top 6 Membership Sites for Beginners">
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <div class="entry-title">
                                                <h3><a href="#" title="Top 6 Membership Sites for Beginners">Top 6 Membership Sites for Beginners</a><span>Featured</span></h3>
                                            </div>
                                            <div class="entry-description">
                                                <p>Gated content can be an incredible way to monetize your work as a creator. So, what is gated content you may ask? It’s exclusive content that is behind a “barrier” - allowing your fans to either ...</p>
                                            </div>
                                            <div class="entry-action">
                                                <a href="#" title="Read More">Read More<i class="las la-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="pagination align-center">
                            <div class="inner">
                                <a href="#" title="Prev" class="prev"><i class="las la-long-arrow-alt-left"></i>Prev</a>
                                <span>1</span>
                                <a href="#" title="2" class="number">2</a>
                                <a href="#" title="Next" class="next">Next<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- SITE CONTENT -->
    </main>

@endsection
