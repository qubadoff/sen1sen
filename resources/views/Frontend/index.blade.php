@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Site name"))

@section('content')
    <!-- BEGIN SITE MAIN -->
    <main id="main" class="site-main">
        <div class="site-content pt0 pb0">
            <section class="section opt120 spdb overflow-hidden">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6">
                            <div class="pdr100">
                                <div class="heading mb32">
                                    <h2 class="heading-title size-xl">
                                        {{__("“Sən1Sən” platforması MG Consulting şirkətinin sosial layihəsidir.")}}
                                    </h2>
                                    <div class="heading-desc">
                                        {{__("Bu platforma Azərbaycan gənclərini həvəsləndirmək, onların bacarıqlarını inkişaf etdirmək və karyera qurulmasında dəstək olmaq məqsədi daşıyır.")}}
                                    </div>
                                </div>
                                <div class="button-wrap">
                                    <a href="contact-01.html" class="button fullfield" title="Les't talk - Send a message">
                                        {{__("Read more")}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="wow animate__zoomIn" src="assets/images/hst-01.png" alt="Image">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdt">
                <div class="container">
                    <div class="block-icon-box layout-13">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-navy">
                                            <i class="las la-shield-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">24/7 Support</h3>
                                            <div class="desc">Nunc molestie tellus sapien, quis laoreet orci.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-yellow">
                                            <i class="las la-puzzle-piece"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Take Ownership</h3>
                                            <div class="desc">Nunc molestie tellus sapien, quis laoreet orci.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-red">
                                            <i class="las la-umbrella"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Team Work</h3>
                                            <div class="desc">Nunc molestie tellus sapien, quis laoreet orci.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdtb">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6 lg-order-2">
                            <div class="pdr80 lg-mt32">
                                <div class="heading mb24">
                                    <div class="heading-sub color-navy">{{__("Our Goal")}}e</div>
                                    <h2 class="heading-title size-l">
                                        {{__("Azərbaycanda işsizlik səviyyəsini aşağı salmaq, gənclərin işlə təmin olunmasına nail olmaq və iş axtaranların müvafiq bacarıqlarını inkişaf etdirməkdir.")}}
                                    </h2>
                                </div>
                                <div class="button-wrap mt32"><a href="contact-01.html" class="button fullfield" title="Get in touch">
                                        {{__("Read more")}}
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 lg-order-1">
                            <div class="pdl80">
                                <div class="images layout-02">
                                    <div class="inner">
                                        <img class="wow animate__fadeInLeft" src="assets/images/hst-03.svg" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section background-yellow">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6">
                            <div class="pdr60 lg-pdt30 lg-pdb30">
                                <div class="heading heading-alway-dark mb32">
                                    <h2 class="heading-title size-l">
                                        {{__("“Hər bir gəncin öz güclü tərəfləri var. Onları müəyyən etməklə, gəncləri düzgün istiqamətləndirməklə onların həyatlarında dönüş yaradırıq”")}}
                                    </h2>
                                </div>
                                <div class="button-wrap">
                                    <a href="#" class="button borderline-dark" title="Read more story">
                                        {{__("Fəridə Quluzadə, Sən1Sən layihəsinin rəhbəri.")}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pdl100">
                                <img class="wow animate__fadeInRight" src="assets/images/hst-04.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdtb">
                <div class="container">
                    <div class="heading align-center">
                        <h2 class="heading-title size-l">{{__("Our Services")}}</h2>
                    </div>
                    <div class="block-icon-box layout-03">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-01.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("Gənclərin daxili inamını artırmağa yönələn müxtəlif fəaliyyətlər")}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-03.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("İşsizliyin səbəblərini araşdırmaq və müvafiq qurumlara təkliflər hazırlamaq")}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-04.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("Təlim və yenidən təlim (re-training) təklif etmək ")}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-05.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("CV hazırlanması")}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-06.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("İş bazarına dair məsləhətlərin verilməsi. ")}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box p48">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="assets/images/services-02.svg" alt="Icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">
                                                {{__("Azərbaycan ilk dəfə olaraq “Video CV” formatı (iş axtaran gənclər özləri və  təcrübələri haqqında qısa video CV vasitəsi ilə potensial iş axtaranlara çıxış əldə edir)")}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdtb">
                <div class="block-banner">
                    <div class="container">
                        <div class="row flex-align-c">
                            <div class="col-lg-6">
                                <div class="image">
                                    <img class="wow animate__fadeInRight" src="assets/images/hst-05.svg" alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content lg-mt32 pdl60">
                                    <div class="heading mb32">
                                        <div class="heading-sub color-navy">Insight</div>
                                        <h2 class="heading-title size-l">Insight that drives change</h2>
                                        <div class="heading-desc">It is a long established fact that a reader will be distracted by the readable content</div>
                                    </div>
                                    <div class="block-counter layout-03">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">98</span><span class="suffix color-navy">%</span></div>
                                                    <div class="title">Private Office</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">20</span><span class="suffix color-navy">+</span></div>
                                                    <div class="title">Coworking Desks</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">100</span><span class="suffix color-navy">+</span></div>
                                                    <div class="title">Meeting Rooms</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">55</span><span class="suffix color-navy">%</span></div>
                                                    <div class="title">Meeting Rooms</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-wrap">
                                        <a href="contact-01.html" class="button fullfield">Get in touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section background-grey spdtb">
                <div class="container">
                    <div class="heading align-center">
                        <div class="heading-sub color-navy">testimonial</div>
                        <h2 class="heading-title size-l">People who already love us</h2>
                    </div>
                    <div class="block-testimonial layout-01">
                        <div
                            class="swiper uxp-swiper-slider testimonial-slider"
                            data-pagination="testimonial-pagination"
                            data-direction="horizontal"
                            data-slider-center="false"
                            data-slider-loop="false"
                            data-gap-xl="30"
                            data-gap-md="10"
                            data-xl="2"
                            data-lg="2"
                            data-md="1"
                            data-sm="1"
                            data-xs="1"
                            data-es="1"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p>"Easy to follow but incredibly insightful tutorials. Makes learning new software and techniques and real pleasure everyday! Keep up the good work"</p>
                                        <div class="meta">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="assets/images/post-author-01.jpg" alt="Avatar">
                                                    <i class="las la-quote-right"></i>
                                                </div>
                                                <div class="info">
                                                    <div class="name">Iruka Akuchi</div>
                                                    <div class="position">Assistant Post Order, Wipple</div>
                                                </div>
                                            </div>
                                            <div class="logo"><img src="assets/images/client-01.webp" alt="Logo"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p>"Easy to follow but incredibly insightful tutorials. Makes learning new software and techniques and real pleasure everyday! Keep up the good work"</p>
                                        <div class="meta">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="assets/images/post-author-02.jpg" alt="Avatar">
                                                    <i class="las la-quote-right"></i>
                                                </div>
                                                <div class="info">
                                                    <div class="name">Erika Mateo</div>
                                                    <div class="position">COO Tinuclues</div>
                                                </div>
                                            </div>
                                            <div class="logo"><img src="assets/images/client-02.webp" alt="Logo"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p>"Easy to follow but incredibly insightful tutorials. Makes learning new software and techniques and real pleasure everyday! Keep up the good work"</p>
                                        <div class="meta">
                                            <div class="author">
                                                <div class="avatar">
                                                    <img src="assets/images/post-author-02.jpg" alt="Avatar">
                                                    <i class="las la-quote-right"></i>
                                                </div>
                                                <div class="info">
                                                    <div class="name">Anna Ly</div>
                                                    <div class="position">Copywriter Vimeo</div>
                                                </div>
                                            </div>
                                            <div class="logo"><img src="assets/images/client-03.webp" alt="Logo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdt">
                <div class="block-blog">
                    <div class="container">
                        <div class="heading align-center">
                            <h2 class="heading-title size-l">From our blog</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <article class="post post-grid">
                                    <div class="entry-thumbnail">
                                        <a href="#" title="Top 6 Membership Sites for Beginners">
                                            <img src="assets/images/post-01.jpg" alt="Top 6 Membership Sites for Beginners">
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="#" title="Marketing">Marketing</a>
                                            <a href="#" title="Creative">Creative</a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="#" title="Top 6 Membership Sites for Beginners">Top 6 Membership Sites for Beginners</a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <article class="post post-grid">
                                    <div class="entry-thumbnail">
                                        <a href="#" title="How to become a web designer in 2022">
                                            <img src="assets/images/post-02.jpg" alt="How to become a web designer in 2022">
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="#" title="Tutorials">Tutorials</a>
                                            <a href="#" title="Ui/Ux Design">Ui/Ux Design</a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="#" title="How to become a web designer in 2022">How to become a web designer in 2022</a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <article class="post post-grid">
                                    <div class="entry-thumbnail">
                                        <a href="#" title="20 best affiliate programs for online creators in 2022">
                                            <img src="assets/images/post-03.jpg" alt="20 best affiliate programs for online creators in 2022">
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="#" title="Resources">Resources</a>
                                            <a href="#" title="Tutorials">Tutorials</a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="#" title="20 best affiliate programs for online creators in 2022">20 best affiliate programs for online creators in 2022</a></h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- SITE CONTENT -->
    </main>
    <!-- END SITE MAIN -->
@endsection
