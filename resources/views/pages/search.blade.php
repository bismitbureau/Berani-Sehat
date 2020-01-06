@extends('layouts.base2')

@section('title', 'Search')

@section('extra-fonts')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
@endsection

@section('prerender-js')

@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
@endsection

@section('content')
    <div class="container-fluid headerkategori headerpencarian" style="background-image: url({{ asset('img/search-background.jpg') }}); background-position: center;">
        <div class="container">
            Hasil Pencarian “{{ $keyword }}”
        </div>
    </div>
    <div class="container-fluid fullscreen">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-12 col-md-4 container-fluid articles">
                    <a href="{{ route('post', ['post_id' => $post->id]) }}">
                        <img src="{{ asset($post->pict) }}" alt="jar" class="articles-img">
                        <div class="unhidden">
                            <div class="article-txt">
                                <h5>{{ str_limit(strip_tags($post->title), 100) }}</h5>
                            </div>
                        </div>
                        <div class="hidden">
                            <div class="article-txt">
                                <p>{{ str_limit(strip_tags($post->body), 100) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{ $posts_no }}
        </div>
    </div>
    <div class="container-fluid smallscreen">
        @foreach($posts as $post)
            <div class="row section-title">
                <div class="col-3 col-lg-3 article-picture">
                    <a href="{{ route('post', ['post_id' => $post->id]) }}">
                        <img src="{{ asset($post->pict) }}">
                    </a>
                </div>
                <div class="col-9 col-lg-9 article-title">
                    <a href="{{ route('post', ['post_id' => $post->id]) }}">
                        <h4>{{ $post->title }}</h4>
                    </a>
                </div>
            </div>
        @endforeach
        @if ($posts_no == 0)
            <p class="center" style="padding-top: 20px; padding-bottom: 20px;">
                    Pencarian Tidak Ditemukan
                </p>
        @endif
    </div>
@endsection

@section('extra-js')

@endsection
