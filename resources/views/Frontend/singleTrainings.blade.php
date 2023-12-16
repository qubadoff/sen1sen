@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : $training->getTranslatedAttribute("name"))

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
                                        {{ $training->getTranslatedAttribute("title") }}
                                    </h2>
                                    <br/>
                                    <br/>
                                    <div>
                                        <img src="{{ url('/') }}/storage/{{ $training->image }}" alt=""/>
                                    </div>
                                    <br/>
                                    <div>
                                        {!! $training->getTranslatedAttribute("body") !!}
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{__("Təlimdə iştrak etmək üçün aşağıdakı linkə daxil olaraq qeyd ola bilərsiniz.")}}
                                        </h5>
                                        <br/>
                                        <a href="{{ route("registerTraining", ['locale' => app()->getLocale()]) }}" class="btn btn-danger">{{__("Qeydiyyat")}}</a>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
