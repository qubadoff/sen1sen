@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Bizimlə Əlaqə"))

@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Bizimlə Əlaqə")}}</h1>
                    <div class="desc">{{__("Sizinlə əlaqə qurmaq bizə xoşdu.")}}</div>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="heading">
                                <h2 class="heading-title">{{__("Əlaqə vasitələrimiz") }}</h2>
                                <div class="heading-desc">
                                    {{__("Aşağıdakı vasitələrdən istifadə edərək bizimlə əlaqə qura bilərsiniz.")}}
                                </div>
                            </div>
                            <div class="contact-boxs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-box">
                                            <a href="tel:{{ setting('site.phone') }}" title="Call us" class="background-navy">{{__("Zəng üçün")}}<span>{{ setting('site.phone') }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-box">
                                            <a href="mailto:{{ setting('site.email') }}" title="Email us" class="background-dark">{{__("Email göndər")}}<span>{{ setting('site.email') }}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heading">
                                <h2 class="heading-title">{{__("Ünvan")}}</h2>
                                <div class="heading-desc">{{ setting('site.address') }}</div>
                            </div>
                            <iframe src="{{ setting('site.map_link') }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form layout-01">
                            <div class="heading">
                                <h2 class="heading-title">{{__("Bizə mesaj göndərin")}}</h2>
                                <div class="heading-desc">{{__("Aşağıdakı formanı dolduraraq bizə mesaj göndərin.")}}</div>
                            </div>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success2') }}
                                    @php
                                        \Illuminate\Support\Facades\Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if($errors->any())
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endif
                            <form method="POST" action="{{ route("sendMessage") }}">
                                @csrf
                                @method("post")
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="first_name">{{__("Ad")}} *</label>
                                            <input type="text" name="name" id="first_name" value="" placeholder="{{__("Adınızı daxil edin")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="last_name">{{__("Soyad")}} *</label>
                                            <input type="text" name="surname" id="last_name" value="" placeholder="{{__("Soyadınızı daxil edin")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="work_email">{{__("Email")}} *</label>
                                            <input type="text" name="email" id="work_email" value="" placeholder="{{__("Emailinizi daxil edin")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="phone_number">{{__("Nömrə")}} *</label>
                                            <input type="text" name="phone" id="phone_number" value="" placeholder="{{__("Telefon nömrənizi daxil edin")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-input field-textarea">
                                            <label for="message">{{__("Mətn")}} *</label>
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="{{__("Mesaj mətnini daxil edin")}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-submit">
                                            <input type="submit" value="{{__("Göndər")}}" name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- SITE CONTENT -->
    </main>

@endsection
