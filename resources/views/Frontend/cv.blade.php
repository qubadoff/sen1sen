@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Site name"))

@section('content')
<main id="main" class="site-main">
    <section class="page-title">
        <div class="container">
            <div class="inner align-center">
                <h1 class="title">{{__("Upload your CV")}}</h1>
                <div class="desc">We’re happy to talk to you.</div>
            </div>
        </div>
    </section><!-- PAGE TITLE -->
    <div class="site-content">
        <div class="container">
                <div class="col-lg-12">
                    <div class="contact-form layout-01">
                        <form action="{{ route("cv_upload") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("post")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="first_name">First name *</label>
                                        <input type="text" name="first_name" id="first_name" value="" placeholder="Enter your first name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="last_name">Last name *</label>
                                        <input type="text" name="last_name" id="last_name" value="" placeholder="Enter your last name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="work_email">Email *</label>
                                        <input type="email" name="email" id="email" value="" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="phone_number">Phone number *</label>
                                        <input type="text" name="phone" id="phone_number" value="" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="age">Age *</label>
                                        <input type="number" name="age" id="age" value="" placeholder="Enter your age" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="expeirence">Experience *</label>
                                        <input type="number" name="experience" id="phone_number" value="" placeholder="Enter your experience" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="city">City *</label>
                                        <input type="number" name="city" id="phone_number" value="" placeholder="Enter your City" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input field-select">
                                        <label for="education">Education *</label>
                                        <select name="education" class="form-select" required>
                                            <option value="">Select</option>
                                            @foreach($education as $item)
                                                <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute("name") }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input field-select">
                                        <label for="language">Language *</label>
                                        <select name="language" class="form-select" multiple required>
                                            @foreach($languages as $item)
                                                <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute("name") }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="cv_file">CV File</label>
                                        <input type="file" name="cv_file" id="phone_number" value="" placeholder="Choose your CV file" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label for="cv_video">Video CV *</label>
                                        <input type="file" name="cv_video" id="phone_number" value="" placeholder="Choose your CV file" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input field-textarea">
                                        <label for="message">Other information</label>
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-submit">
                                        <input type="submit" value="Upload CV" name="submit">
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
