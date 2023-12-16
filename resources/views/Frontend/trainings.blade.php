@extends('Frontend.Layouts.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : __("Bizim təlimlərimiz"))

@section('content')
    <br/>
    <br/>
    <br/>
    <section class="section spdt">
        <div class="block-blog">
            <div class="container">
                <div class="heading align-center">
                    <h2 class="heading-title size-l">
                        {{__("Bizim təlimlərimiz")}}
                    </h2>
                </div>
                <div class="row">
                    @forelse($tranings as $post)
                        <div class="col-lg-4 col-sm-12">
                            <article class="post post-grid">
                                <div class="entry-thumbnail">
                                    <a href="{{ route("singleTrainings", ['slug' => $post->slug]) }}" title="{{ $post->getTranslatedAttribute("title") }}">
                                        <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="{{ $post->getTranslatedAttribute("title") }}">
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-title">
                                        <h3>
                                            <a href="{{ route("singleTrainings", ['slug' => $post->slug]) }}" title="Top 6 Membership Sites for Beginners">
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
