@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Proyektlərimiz"))

@section('content')
    <main id="main" class="site-main">
        <section class="page-title">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">{{__("Bizim proyektlər")}}</h1>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @forelse($projects as $i)
                            <div class="blog-middle">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <article class="post post-grid post-featured">
                                            <div class="entry-thumbnail">
                                                <a href="{{ route("singleProject", ['slug' => $i->slug]) }}" title="{{ $i->getTranslatedAttribute("name") }}">
                                                    <img src="{{ url('/') }}/storage/{{ $i->image }}" alt="{{ $i->getTranslatedAttribute("name") }}">
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                <div class="entry-title">
                                                    <h3><a href="{{ route("singleProject", ['slug' => $i->slug]) }}" title="{{ $i->getTranslatedAttribute("name") }}">
                                                            {{ $i->getTranslatedAttribute("name") }}
                                                        </a></h3>
                                                </div>
                                                <div class="entry-description">
                                                    <p>
                                                        {{ $i->getTranslatedAttribute("description") }}
                                                    </p>
                                                </div>
                                                <div class="entry-action">
                                                    <a href="{{ route("singleProject", ['slug' => $i->slug]) }}" title="Read More">{{__("Ətraflı")}}<i class="las la-long-arrow-alt-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Data
                        @endforelse
{{--                        <div class="pagination align-center">--}}
{{--                            <div class="inner">--}}
{{--                                <a href="#" title="Prev" class="prev"><i class="las la-long-arrow-alt-left"></i>Prev</a>--}}
{{--                                <span>1</span>--}}
{{--                                <a href="#" title="2" class="number">2</a>--}}
{{--                                <a href="#" title="Next" class="next">Next<i class="las la-long-arrow-alt-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div><!-- SITE CONTENT -->
    </main>

@endsection
