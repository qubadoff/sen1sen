@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Video CV"))

@section('content')
<main id="main" class="site-main">
    <section class="page-title">
        <div class="container">
            <div class="inner align-center">
                <h1 class="title">{{__("Video CV yüklə")}}</h1>
                <div class="desc">{{__("Aşağıdakı məlumatları dolduraraq bizə VİDEO CV-nizi göndərin.")}}</div>
            </div>
            <br/>
            <br/>
            <div class="alert alert-danger" role="alert">
                <b style="color: black">
                    Diqqət ! Video uzunluğu max: 1 dəq, həcmi max: 100 MB və fayl tipləri mp4,mov,ogg,flv,3gp,avi,wmv olmalıdır! <br/><br/>
                    Məlumatlarınızın göndərilmə müddəti internet sürətinizdən aslıdır. Məlumatlarınızı göndərdikdən sonra əməliyyat bitənə qədər gözləyin.
                </b>
            </div>
        </div>
    </section><!-- PAGE TITLE -->
    <div class="site-content">
        <div class="container">
                <div class="col-lg-12">
                    <div class="contact-form layout-01">
                        @if(Session::has('success1'))
                            <div class="alert alert-success">
                                {{ Session::get('success1') }}
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
                        <form action="{{ route("cv_upload") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("post")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="first_name">{{__("Ad")}} *</label>
                                        <input type="text" name="name" placeholder="{{__("Adınızı daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="last_name">{{__("Soyad")}} *</label>
                                        <input type="text" name="surname" placeholder="{{__("Soyadınızı daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="last_name">{{__("Ata adı")}} *</label>
                                        <input type="text" name="father_name" placeholder="{{__("Ata adınızı daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="work_email">{{__("Email")}} *</label>
                                        <input type="email" name="email" placeholder="{{__("Emailinizi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="phone_number">{{__("Nömrə")}} *</label>
                                        <input type="text" name="phone" placeholder="{{__("Telefon nömrənizi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="age">{{__("Yaş")}} *</label>
                                        <input type="number" name="age" placeholder="{{__("Yaşınızı daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="experience">{{__("Təcrübə")}} *</label>
                                        <input type="number" name="experience" placeholder="{{__("Təcrübənizi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="experience">{{__("Kompüter bilikləri")}} *</label>
                                        <input type="text" name="computer_skills" placeholder="{{__("Kompüter biliklərinizi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="experience">{{__("Hobbi")}} *</label>
                                        <input type="text" name="hobby" placeholder="{{__("Hobbilərinizi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="city">{{__("Şəhər")}} *</label>
                                        <input type="text" name="city" placeholder="{{__("Yaşadığınız şəhəri daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input field-select">
                                        <label for="education">{{__("Təhsil dərəcəsi")}} *</label>
                                        <select name="education" class="form-select" required>
                                            <option value="">{{__("Təhsil dərəcəsi")}}</option>
                                            @foreach($education as $item)
                                                <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute("name") }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="city">{{__("Bitirdiyiniz müəsisənin adı")}} *</label>
                                        <input type="text" name="education_school_name" placeholder="{{__("Bitirdiyiniz müəsisənin adını daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input">
                                        <label for="city">{{__("İxtisas")}} *</label>
                                        <input type="text" name="speciality" placeholder="{{__("İxtisasınızı daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input field-select">
                                        <label for="language">{{__("Bildiyiniz Dillər")}} *</label>
                                        <select name="language" class="form-select" multiple required>
                                            @foreach($languages as $item)
                                                <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute("name") }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input">
                                        <label for="cv_video">{{__("Video CV yükləyin")}} *</label>
                                        <input type="file" name="cv_video" placeholder="{{__("Video CV daxil edin")}}" id="f" data-max-size="200000" accept="video/*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input name="rules" class="form-check-input" type="checkbox" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">
                                            <a href="/privacy-policy" style="color: blue" target="_blank">
                                                Qaydalar
                                            </a>
                                            ilə tanış oldum və qəbul edirəm.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input name="is_private" class="form-check-input" type="checkbox" value="1" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">
                                            Məlumatlarımı 3-cü tərəflərlə paylaşmaqa icazə verirəm.
                                        </label>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="col-md-6">
                                    <div class="field-submit">
                                        <input type="submit" value="{{__("Göndər")}}" name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div><!-- SITE CONTENT -->
</main>
@endsection
