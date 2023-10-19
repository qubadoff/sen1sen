@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Video CV nədir ?"))
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
                                    <h2 class="heading-desc" style="font-size: 30px;">
                                        Çəkiliş üçün səliqəli geyinməyiniz və əlavə səslərin olmadığı məkan seçməyiniz xahiş olunur.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image pdl80">
                                <img style="width: 350px; height: 400px;" src="{{ url('/') }}/assets/images/cv/1.png" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <hr>
            <br/>
            <section class="section-banner">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6">
                            <div class="content pdr80">
                                <div class="heading">
                                    <h2 class="heading-desc" style="font-size: 30px;">
                                        Video Cv çəkəcəyiniz cihazı <br/> ( telefon, planşet və ya komputer) yoxladıqdan sonra sabit bir yerə yerləşdirin.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image pdl80">
                                <img style="width: 350px; height: 400px;" src="{{ url('/') }}/assets/images/cv/2.png" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <hr>
            <br/>
            <section class="section-banner">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6">
                            <div class="content pdr80">
                                <div class="heading">
                                    <h2 class="heading-desc" style="font-size: 30px;">
                                        Çəklişə başlayın və 1-2 dəqiqə ərzində özünüzü təqdim edin (təhsil,iş təcrübəniz,şəxsi keyfiyyət və bacarıqlarınız).
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image pdl80">
                                <img style="width: 350px; height: 400px;" src="{{ url('/') }}/assets/images/cv/3.png" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <hr>
            <br/>
            <section class="section-banner">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-6">
                            <div class="content pdr80">
                                <div class="heading">
                                    <h2 class="heading-desc" style="font-size: 30px;">
                                        MG-consultinqin bir layihəsi olan S1S biliyi və təcrübəsi az olsada ürəyi böyük olan gənclərə dəstək olmaq üçün yaradılıb.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image pdl80">
                                <img style="width: 350px; height: 400px;" src="{{ url('/') }}/assets/images/cv/4.png" alt="Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <hr>
            <br/>
            <section class="section-banner">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-9">
                            <div class="content pdr80">
                                <div class="heading">
                                    <h2 class="heading-desc" style="font-size: 30px;">
                                        Artıq hazırsan. Video CV-ni yüklə bölməsinə keç. Lazım olan bölmələri doldur və göndər.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <a href="{{ route("cv") }}">
                                <button type="button" class="btn btn-primary btn-lg">
                                    Video CV-ni Göndər
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <br/>
        </div><!-- SITE CONTENT -->
    </main>
@endsection

