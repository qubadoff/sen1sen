<!-- BEGIN SITE HEADER -->
<header id="header" class="site-header is-transparent">
    <div class="container-fluid">
        <div class="row flex-align-c inner">
            <div class="col-lg-3 col-6">
                <div class="header-left flex flex-align-c">
                    <div class="canvas-menu">
                        <div class="icon">
                            <a href="#">
                                <svg width="30px" height="14px" viewBox="0 0 30 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g   stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-50.000000, -33.000000)" fill="#111111">
                                            <g id="off-menu" transform="translate(50.000000, 28.000000)">
                                                <g id="icon-menu" transform="translate(0.000000, 5.000000)">
                                                    <rect id="Rectangle-1" x="0" y="0" width="30" height="3" rx="1.5"></rect>
                                                    <rect id="Rectangle-2" x="0" y="11" width="20" height="3" rx="1.5"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="{{ route("index") }}">
                            <h2>
                                {{__("Sen1Sen")}}
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-0 text-center">
                <div class="header-center">
                    <div class="main-menu">
                        <div class="menu-action">
                            <span class="item menu-back"><i class="las la-arrow-left"></i></span>
                            <span class="item menu-close"><i class="las la-times"></i></span>
                        </div>
                        <ul>
                            <li class="is-normal-menu"><a href="{{ route("index") }}">{{__("Ana səhifə")}}</a></li>
                            <li class="is-normal-menu"><a href="{{ route("about") }}">{{__("Haqqımızda")}}</a></li>
                            <li class="is-normal-menu"><a href="{{ route("trainings") }}">{{__("Təlimlər")}}</a></li>
                            <li class="is-normal-menu"><a href="{{ route("News") }}">{{__("Yeniliklər")}}</a></li>
                            <li class="is-normal-menu"><a href="{{ route("projects") }}">{{__("Layihələrimiz")}}</a></li>
                            <li class="is-normal-menu"><a href="{{ route("aboutCV") }}">{{__("Video CV")}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="header-right flex flex-align-c flex-content-e">
{{--                    <div class="customer">--}}
{{--                        <a href="sign-in.html"><i class="las la-user-circle"></i><span>Log In</span></a>--}}
{{--                    </div>--}}
                    <div class="buttons">
                        <a href="{{ route("contact") }}" class="button fullfield">
                            <i class="las la-phone"></i>
                            <span>{{__("Bizimlə Əlaqə")}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END SITE HEADER -->
