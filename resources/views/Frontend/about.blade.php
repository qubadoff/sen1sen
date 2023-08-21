@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Site name"))
<br/>
<br/>
@section('content')
<main id="main" class="site-main">
    <div class="site-content pb0">
        <section class="section-banner">
            <div class="container">
                <div class="row flex-align-c">
                    <div class="col-lg-6">
                        <div class="content pdr80">
                            <div class="heading">
                                <div class="heading-sub">About Company</div>
                                <h2 class="heading-title">We help small businesses with big hearts make meaningful hires.</h2>
                            </div>
                            <div class="button-wrap">
                                <a href="contact-01.html" class="button fullfield">Get in touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image pdl80">
                            <img src="{{ url('/') }}/assets/images/banner-image-04.png" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-text spdt">
            <div class="container">
                <div class="row flex-align-c">
                    <div class="col-lg-6">
                        <div class="text-left pdr80">
                            <h2>Our Mission</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec vehicula arcu.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-right pdr80">
                            <p>Vestibulum vitae orci et nisi iaculis commodo vitae eu velit. Nullam id erat in orci consequat aliquam at sed nisi. Nullam consequat leo at justo consectetur, vel vehicula odio consequat. Aliquam accumsan dictum leo sed dignissim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section spdtb">
            <div class="container">
                <div class="block-counter layout-02">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">2018</span></div>
                                <div class="title">Year founded</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">60</span><span class="suffix">+</span></div>
                                <div class="title">Projects</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">10</span><span class="suffix">+</span></div>
                                <div class="title">Awwarts</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">50</span><span class="suffix">+</span></div>
                                <div class="title">Team members</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-video">
            <div class="container">
                <div class="popup-wrapper ratio" style="--bs-aspect-ratio: 50%">
                    <img src="{{ url('/') }}/assets/images/our-team.jpg" alt="Popup Video">
                    <a href="#" data-popup="popup-video" class="icon-popup background-navy size-l"><i class="las la-play"></i></a>
                </div>
            </div>
        </div>
        <section class="section-team spdtb">
            <div class="container">
                <div class="heading align-center">
                    <h2 class="heading-title">Meet our team</h2>
                    <p>Our people make the difference</p>
                </div>
                <div class="block-team layout-01">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="member-box align-center">
                                <div class="inner">
                                    <div class="member-avatar">
                                        <img src="{{ url('/') }}/assets/images/mem-1.png" alt="Member">
                                    </div>
                                    <div class="member-content">
                                        <h4 class="name">Stéphane Gibert</h4>
                                        <div class="position">Co-Founder</div>
                                        <ul class="share">
                                            <li class="twitter"><a href="#" title="twitter"><i class="lab la-twitter"></i></a></li>
                                            <li class="linkedin"><a href="#" title="linkedin"><i class="lab la-linkedin-in"></i></a></li>
                                            <li class="instagram"><a href="#" title="instagram"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="member-box align-center">
                                <div class="inner">
                                    <div class="member-avatar">
                                        <img src="{{ url('/') }}/assets/images/mem-2.png" alt="Member">
                                    </div>
                                    <div class="member-content">
                                        <h4 class="name">Miriam Jesus</h4>
                                        <div class="position">UX, UI Designer</div>
                                        <ul class="share">
                                            <li class="twitter"><a href="#" title="twitter"><i class="lab la-twitter"></i></a></li>
                                            <li class="linkedin"><a href="#" title="linkedin"><i class="lab la-linkedin-in"></i></a></li>
                                            <li class="instagram"><a href="#" title="instagram"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="member-box align-center">
                                <div class="inner">
                                    <div class="member-avatar">
                                        <img src="{{ url('/') }}/assets/images/mem-3.png" alt="Member">
                                    </div>
                                    <div class="member-content">
                                        <h4 class="name">John Doe</h4>
                                        <div class="position">Head of Makerting</div>
                                        <ul class="share">
                                            <li class="twitter"><a href="#" title="twitter"><i class="lab la-twitter"></i></a></li>
                                            <li class="linkedin"><a href="#" title="linkedin"><i class="lab la-linkedin-in"></i></a></li>
                                            <li class="instagram"><a href="#" title="instagram"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrap align-center">
                        <a href="our-team.html" class="button fullfield">View All Team</a>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- SITE CONTENT -->
</main>
@endsection
