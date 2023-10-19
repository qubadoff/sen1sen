@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Sen1Sen"))

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
                                        {{__("Fayda və Dostluğ Sən1Sən də birləşir.")}}
                                    </h2>
                                    <div class="heading-desc">
                                        {{__("Sən1Sən MG Consulting-in gənclər üçün olan sosial layihəsidir.")}}
                                    </div>
                                </div>
                                <div class="button-wrap">
                                    <a href="{{ route("about") }}" class="button fullfield" title="Les't talk - Send a message">
                                        {{__("Ətraflı")}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="wow animate__zoomIn" src="{{ url('/') }}/assets/images/hst-01.png" alt="Image">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section spdt">
                <div class="container">
                    <div class="heading align-center">
                        <h2 class="heading-title size-l">{{__("Özəlliklərimiz")}}</h2>
                    </div>
                    <div class="block-icon-box layout-13">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-navy">
                                            <i class="las la-question-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("Video CV")}}</h3>
                                            <div class="desc">
                                                {{__("İş tapmaqda yeni, ən müasir yanaşma bizdə. Video CV!")}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-yellow">
                                            <i class="las la-file-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">
                                                {{__("Aktiv Layihələr")}}
                                            </h3>
                                            <div class="desc">
                                                {{__("Ölkədə gənclərə aid aktiv layihələri rahatlığınız üçün buraya topladıq.")}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-red">
                                            <i class="las la-microphone"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("İşıq yolu")}}</h3>
                                            <div class="desc">
                                                {{__("Sizin problemlərinizi işıqlandırmaq bizim işimizdir.")}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-navy-2">
                                            <i class="las la-place-of-worship"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("Faydalarımız")}}</h3>
                                            <div class="desc">{{__("Sənin iş həyatına lazım olan treyninqlər.")}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="icon-box">
                                    <div class="inner">
                                        <div class="icon background-navy">
                                            <i class="las la-handshake"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">{{__("Dostluq")}}</h3>
                                            <div class="desc">{{__("Fərq qoymadan bütün gənclərin yanındayıq.")}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <br/><br/>

            <section class="section spdtb background-yellow">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6 lg-order-2">
                            <div class="pdr80 lg-mt32">
                                <div class="heading mb24">
                                    <h2 class="heading-title size-l">
                                        {{__("Azərbaycanda ilk VideoCV platforması")}}
                                    </h2>
                                    <div class="heading-desc">
                                        {{__("Video CV var - Iş səni tapar !")}}
                                    </div>
                                </div>
                                <div class="button-wrap mt32">
                                    <a href="{{ route("aboutCV") }}" class="button fullfield" title="Get in touch">
                                        {{__("Video CV yüklə")}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 lg-order-1">
                            <div class="pdl80">
                                <div class="images layout-02">
                                    <div class="inner">
                                        <img class="wow animate__fadeInLeft" src="https://sen1sen.az/assets/images/hst-03.svg" alt="Image" style="visibility: visible; animation-name: fadeInLeft;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section spdtb">
                <div class="container">
                    <div class="heading align-center">
                        <h2 class="heading-title size-l">{{__("Xidmətlərimiz")}}</h2>
                    </div>
                    <div class="block-icon-box layout-03">
                        <div class="row">
                            @forelse($services as $i)
                                <div class="col-lg-6">
                                    <div class="icon-box p48">
                                        <div class="inner">
                                            <div class="icon">
                                                <img src="{{ url('/') }}/storage/{{ $i->image }}" alt="Icon">
                                            </div>
                                            <div class="content">
                                                <h3 class="title">{{ $i->getTranslatedAttribute("name") }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Data !
                            @endforelse
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
                                    <img class="wow animate__fadeInRight" src="{{ url('/') }}/assets/images/hst-05.svg" alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="content lg-mt32 pdl60">
                                    <div class="heading mb32">
                                        <h2 class="heading-title size-l">{{__("Statistika")}}</h2>
                                        <div class="heading-desc">
                                            {{__("Hər bir layihədən əvvəl, araşdırma mütləqdir!")}}
                                        </div>
                                    </div>
                                    <div class="block-counter layout-03">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">20</span><span class="suffix color-navy">+</span></div>
                                                    <div class="title">{{__("Fokus qrup və araşdırmaq")}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box">
                                                    <div class="number"><span class="counter">500</span><span class="suffix color-navy">+</span></div>
                                                    <div class="title">{{__("Gənclər arasında sorğu")}}</div>
                                                </div>
                                            </div>
                                        </div>
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
                        <h2 class="heading-title size-l">
                            {{__("Uğurun sirri...")}}
                        </h2>
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
                                @forelse($testimonials as $i)
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <p>
                                                {!! $i->getTranslatedAttribute("body") !!}
                                            </p>
                                            <div class="meta">
                                                <div class="author">
                                                    <div class="avatar">
                                                        <img src="{{ url('/') }}/storage/{{ $i->image }}" alt="Avatar">
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            {{ $i->getTranslatedAttribute("name") }} <br/>
                                                            {{ $i->getTranslatedAttribute("work_desc") }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    No data !
                                @endforelse
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
                            <h2 class="heading-title size-l">
                                {{__("Yeniliklər")}}
                            </h2>
                        </div>
                        <div class="row">
                            @forelse($posts as $post)
                                <div class="col-lg-4 col-sm-12">
                                    <article class="post post-grid">
                                        <div class="entry-thumbnail">
                                            <a href="{{ route("singleNews", ['slug' => $post->slug]) }}" title="{{ $post->getTranslatedAttribute("title") }}">
                                                <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="{{ $post->getTranslatedAttribute("title") }}">
                                            </a>
                                        </div>
                                        <div class="entry-content">
                                            <div class="entry-title">
                                                <h3>
                                                    <a href="{{ route("singleNews", ['slug' => $post->slug]) }}" title="Top 6 Membership Sites for Beginners">
                                                        {{ $post->getTranslatedAttribute("title") }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @empty
                                No data !
                            @endforelse
                        </div>
                        <div class="button-wrap mt32">
                            <a href="{{ route("News") }}" class="button fullfield" title="Get in touch">
                                {{__("Bütün yeniliklər")}}
                            </a>
                        </div>
                        <br/>
                        <br/>
                    </div>
                </div>
            </section>
        </div><!-- SITE CONTENT -->
    </main>
    <!-- END SITE MAIN -->
@endsection
