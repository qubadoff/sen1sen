@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Site name"))

@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Contact Us")}}</h1>
                    <div class="desc">{{__("We’re happy to talk to you.")}}</div>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="heading">
                                <h2 class="heading-title">{{__("Let’s talk.") }}</h2>
                                <div class="heading-desc">
                                    {{__("If you have any questions about the subscription or are not sure which plan is right for you, contact our team and let’s schedule a call.")}}
                                </div>
                            </div>
                            <div class="contact-boxs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-box">
                                            <a href="tel:{{ setting('site.phone') }}" title="Call us" class="background-navy">{{__("Call us")}}<span>{{ setting('site.phone') }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-box">
                                            <a href="mailto:{{ setting('site.email') }}" title="Email us" class="background-dark">{{__("Email us")}}<span>{{ setting('site.email') }}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heading">
                                <h2 class="heading-title">{{__("Address")}}</h2>
                                <div class="heading-desc">{{ setting('site.address') }}</div>
                            </div>
                            <iframe src="{{ setting('site.map_link') }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form layout-01">
                            <div class="heading">
                                <h2 class="heading-title">{{__("Send us a message")}}</h2>
                                <div class="heading-desc">{{__("Feel free to contact us with questions, potential partnerships, or media inquiries.")}}</div>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="first_name">{{__("First name")}} *</label>
                                            <input type="text" name="first_name" id="first_name" value="" placeholder="{{__("Enter your first name")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="last_name">{{__("Last name")}} *</label>
                                            <input type="text" name="last_name" id="last_name" value="" placeholder="{{__("Enter your last name")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="work_email">{{__("Email")}} *</label>
                                            <input type="text" name="work_email" id="work_email" value="" placeholder="{{__("Enter your email")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-input">
                                            <label for="phone_number">{{__("Phone number")}} *</label>
                                            <input type="text" name="phone_number" id="phone_number" value="" placeholder="{{__("Enter your phone number")}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-input field-textarea">
                                            <label for="message">{{__("Message")}} *</label>
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="{{__("Write your message")}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-submit">
                                            <input type="submit" value="{{__("Send Message")}}" name="submit">
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
