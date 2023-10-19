@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Proyektlərimiz"))

@section('content')
    <br/>
    <br/>
    <br/>
    <section class="section spdt">
        <div class="block-blog">
            <div class="container">
                <div class="heading align-center">
                    <h2 class="heading-title size-l">
                        {{__("Bizim Layihələrimiz")}}
                    </h2>
                </div>
                <div class="row">
                    @forelse($projects as $post)
                        <div class="col-lg-4 col-sm-12">
                            <article class="post post-grid">
                                <div class="entry-thumbnail">
                                    <a href="{{ route("singleProject", ['slug' => $post->slug]) }}" title="{{ $post->getTranslatedAttribute("name") }}">
                                        <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="{{ $post->getTranslatedAttribute("name") }}">
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-title">
                                        <h3>
                                            <a href="{{ route("singleProject", ['slug' => $post->slug]) }}" title="">
                                                {{ $post->getTranslatedAttribute("name") }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @empty
                        No data !
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection
