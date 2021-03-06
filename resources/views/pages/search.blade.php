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
    <div class="container-fluid">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-12 col-md-4 container-fluid articles">
                    <a href="{{ route('post', ['post_id' => $post->id]) }}">
                        <img src="https://picsum.photos/id/204/1000/500.jpg" alt="jar" class="articles-img">
                        <div class="unhidden">
                            <div class="article-txt">
                                <h5>{{ $post->title }}</h5>
                            </div>
                        </div>
                        <div class="hidden">
                            <div class="article-txt">
                                <p>{{ str_limit(strip_tags($post->body), 60) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('extra-js')

@endsection
