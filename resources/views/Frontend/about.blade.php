@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Haqqımızda"))
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
                                <div class="heading-sub">{{__("Bizim haqqımızda")}}</div>
                                <h2 class="heading-title" style="font-size: 30px;">
                                    {{__("MG-consultinqin bir layihəsi olan S1S biliyi və təcrübəsi az olsada ürəyi böyük olan gənclərə dəstək olmaq üçün yaradılıb.")}}
                                </h2>
                            </div>
                            <div class="button-wrap">
                                <a href="{{ route("contact") }}" class="button fullfield">{{__("Bizimlə Əlaqə")}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image pdl80">
                            <img src="{{ url('/') }}/assets/images/dating-04.png" alt="Banner">
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
                            <h2>{{__("Bizim missiyamız")}}</h2>
                            <p>
                                Gənclərin keçmişini araşdırmaq, <br/> Bu gününü qiymətləndirmək yox! </br> Bizim işimiz Gələcəklərini qurmaqdır.
                            </p>
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
                                <div class="number"><span class="counter">2014</span></div>
                                <div class="title">{{__("ildən fəaliyyətdəyik")}}</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">20</span><span class="suffix">+</span></div>
                                <div class="title">{{__("Proyekt")}}</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">20</span><span class="suffix">+</span></div>
                                <div class="title">{{__("Komanda əməkdaşı")}}</div>
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
                    <a href="{{ setting('site.video_url') }}" target="_blank" class="icon-popup background-navy size-l">
                        <i class="las la-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <section class="section-team spdtb">
            <div class="container">
                <div class="heading align-center">
                    <h2 class="heading-title">{{__("Bizim Komanda")}}</h2>
                </div>
                <div class="block-team layout-01">
                    <div class="row">
                        @forelse($team as $i)
                            <div class="col-lg-4">
                                <div class="member-box align-center">
                                    <div class="inner">
                                        <div class="member-avatar">
                                            <img src="{{ url('/') }}/storage/{{ $i->image }}" alt="Member">
                                        </div>
                                        <div class="member-content">
                                            <h4 class="name">{{ $i->getTranslatedAttribute("name") }}</h4>
                                            <div class="position">{{ $i->getTranslatedAttribute("work_desc") }}</div>
                                            <ul class="share">
                                                <li class="twitter"><a href="{{ $i->fb }}" title="twitter"><i class="lab la-facebook"></i></a></li>
                                                <li class="linkedin"><a href="{{ $i->twitter }}" title="linkedin"><i class="lab la-twitter"></i></a></li>
                                                <li class="instagram"><a href="{{ $i->instagram }}" title="instagram"><i class="lab la-instagram"></i></a></li>
                                                <li class="instagram"><a href="{{ $i->linkedin }}" title="instagram"><i class="lab la-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            NO Data
                        @endforelse
                    </div>
{{--                    <div class="button-wrap align-center">--}}
{{--                        <a href="our-team.html" class="button fullfield">View All Team</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </div><!-- SITE CONTENT -->
</main>
@endsection
