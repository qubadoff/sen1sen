@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : $project->getTranslatedAttribute("name"))

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
                                    <div>
                                        <img src="{{ url('/') }}/storage/{{ $project->image }}" alt=""/>
                                    </div>
                                    <br/>
                                    <h2 class="heading-title" style="font-size: 40px;">
                                        {!! $project->getTranslatedAttribute("body") !!}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
