@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Qeydiyyat"))

@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Təlim üçün qeydiyyatdan keç")}}</h1>
                    <div class="desc">{{__("Aşağıdakı məlumatları dolduraraq təlimlərdə iştrak üçün qeydiyyatdan keçə bilərsinizş")}}</div>
                </div>
                <br/>
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
                        <form action="{{ route("registerTrainingSet") }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="last_name">{{__("Email")}} *</label>
                                        <input type="text" name="email" placeholder="{{__("Email daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="last_name">{{__("Telefon nömrəsi")}} *</label>
                                        <input type="text" name="phone" placeholder="{{__("Telefon nömrsəi daxil edin")}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="field-input field-select">
                                            <label for="education">{{__("Təlim seçin")}} *</label>
                                            <select name="training_id" class="form-select" required>
                                                <option value="">{{__("Təlim seçin")}}</option>
                                                @foreach($trainings as $item)
                                                    <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute("name") }}</option>
                                                @endforeach
                                            </select>
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
