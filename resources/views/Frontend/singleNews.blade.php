@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : $news->getTranslatedAttribute("title"))

@section('content')
    <br/>
    <br/>
    <main id="main" class="site-main">
        <div class="site-content pb0">
            <section class="section-banner">
                <div class="container">
                    <div class="row flex-align-c">
                        <div class="col-lg-12">
                            <div class="content pdr80">
                                <div class="heading">
                                    <h2 class="heading-title" style="font-size: 40px;">
                                        {{ $news->getTranslatedAttribute("title") }}
                                    </h2>
                                    <br/>
                                    <br/>
                                    <div>
                                        <img src="{{ url('/') }}/storage/{{ $news->image }}" alt=""/>
                                    </div>
                                    <br/>
                                    <div>
                                        {!! $news->getTranslatedAttribute("body") !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
