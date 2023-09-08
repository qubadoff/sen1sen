<!-- BEGIN SITE FOOTER -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-item footer-about">
                            <div class="logo">
                                <a href="{{ route("index") }}">
                                    <h2>
                                        {{__("Sen1Sen")}}
                                    </h2>
                                </a>
                            </div>
                            <p>
                                {{__("Gənclərin keçmişini araşdırmaq, bu gününü qiymətləndirmək üçün yox, gələcəyini qurmaq üçün var.")}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item footer-menu">
                            <h6>{{__("Keçidlər")}}</h6>
                            <ul>
                                <li><a href="{{ route("index") }}" title="Ana Səhifə">{{__("Ana Səhifə")}}</a></li>
                                <li><a href="{{ route("about") }}" title="Haqqımızda">{{__("Haqqımızda")}}</a></li>
                                <li><a href="{{ route("projects") }}" title="Our Projects">{{__("Proyektlərimiz")}}</a></li>
                                <li><a href="{{ route("cv") }}" title="Video CV">{{__("Video CV")}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item footer-menu">
                            <h6>{{__("Sosial media")}}</h6>
                            <ul>
                                <li><a href="{{ setting('site.fb') }}" title="Facebook">{{__("Facebook")}}</a></li>
                                <li><a href="{{ setting('site.twitter') }}" title="Twitter">{{__("Tiktok")}}</a></li>
                                <li><a href="{{ setting('site.instagram') }}" title="Instagram">{{__("Instagram")}}</a></li>
                                <li><a href="{{ setting('site.linkedin') }}" title="Linkedin">{{__("Linkedin")}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item footer-newsletter">
                            <h6>{{__("Yeniliklər")}}</h6>
                            <p>
                                {{__("Yeniliklərə abuna olmaq üçün email adresinizi daxil edin.")}}
                            </p>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
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
                            <form method="POST" action="{{ route("subscribers") }}" class="newsletter">
                                @csrf
                                @method('POST')
                                <div class="field-input">
                                    <input type="email" name="email" value="" placeholder="{{__("Email adresi")}}">
                                </div>
                                <div class="field-submit">
                                    <button name="submit" type="submit">{{__("Abunə ol")}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="inner flex flex-content-sb flex-align-c">
                <div class="copyright">{{__("Sen1Sen")}} © {{ date("Y") }}</div>
                <div class="menu">
                    <ul>
                        <li><a href="/privacy-policy" title="Privacy Policy">{{__("Gizlilik və Qaydalar")}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END SITE FOOTER -->
