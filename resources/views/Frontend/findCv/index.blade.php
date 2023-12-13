@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Find CV"))


@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Video CV axtar")}}</h1>
                    <div class="desc">{{__("Sizə lazım olan əməkdaşları tapmaq üçün aşağıdakı axtarış sistemindən istifadə edə bilərsiniz.")}}</div>
                </div>
                <br/>
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
                        <form action="{{ route("cv_upload") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("post")
                            <div class="col-md-12">
                                <div class="field-input">
                                    <label for="first_name">{{__("Ad")}} *</label>
                                    <input type="text" name="name" placeholder="{{__("Adınızı daxil edin")}}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-input">
                                    <label for="first_name">{{__("Ad")}} *</label>
                                    <input type="text" name="name" placeholder="{{__("Adınızı daxil edin")}}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-input">
                                    <label for="first_name">{{__("Ad")}} *</label>
                                    <input type="text" name="name" placeholder="{{__("Adınızı daxil edin")}}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-input">
                                    <label for="first_name">{{__("Ad")}} *</label>
                                    <input type="text" name="name" placeholder="{{__("Adınızı daxil edin")}}" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- SITE CONTENT -->
    </main>
@endsection
