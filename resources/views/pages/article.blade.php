@extends('layouts.base')

@section('extra-fonts')

@endsection

@section('prerender-js')

@endsection

@section('extra-css')
    <link rel="stylesheet" type='text/css' href="{{ asset('css/article.css')}}">
    <link rel="stylesheet" type='text/css' href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
@endsection

@section('content')
    <div class="outer">

        <div class="container-fluid headerkategori" style="background-image: url('https://picsum.photos/id/302/1000/500.jpg')">
            <div class="container">
                {{ $post->category->name }}
            </div>
        </div>

        <div class="container boxshadow">
            <div classs="row" onloadedmetadata="">
                <div class="card col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->toDayDateTimeString() }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">OLEH: {{ $post->user->name }}</h6>
                        <div class="sosmed-artikel">
                            <a href="https://www.facebook.com/media.aesculapius">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-line"></i>
                            </a>
                            <a href="https://www.instagram.com/mediaaesculapius">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-12">
                            {{ $post->body }}
                        </div>
                        </div>

                        <div class="row section-title">
                            <div class="col-md-12">
                            <h3 class="card-subtitle mb-2">DROP YOUR COMMENT HERE!</h3>
                            </div>
                        </div>

                        <div class="marginbottom">
                            <form class="row form-inline" action="{{ route('comment', ['post' => $post->id]) }}" method="POST">
                                @csrf
                                <div class="col-9 form-group mb-2">
                                    <input name="body" ype="text" class="container-fluid form-control" id="commentarticle" placeholder="type your comment here">
                                </div>
                                <button type="submit" class="col-3 btn btn-danger mb-2">POST!</button>
                            </form>
                        </div>

                        <div class="row section-title">
                            <div class="col-md-12">
                                <h3>KOMENTAR ({{ $post->comments->count() }})</h3>
                            </div>
                        </div>

                        <div class="container">
                            <div class="comments-inner-container">
                                @foreach ($post->comments as $comment)
                                    <div class="media mb-4">
                                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                        <div class="media-body">
                                            <h6 class="mt-0">{{ $comment->user->name }} <span class="muted">&#183; {{ $comment->created_at->diffForHumans() }}</span></h6>
                                            {{ $comment->body }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row section-title">
                            <div class="col-md-12">
                               <u><h3>ARTIKEL TERKAIT</h3></u>
                            </div>
                        </div>

                        <div class="row section-title">
                            <div class="col-sm-5 col-md-4 col-lg-3 article-picture">
                                <img src="https://picsum.photos/id/305/1000/500.jpg">
                            </div>
                            <div class="col-sm-7 col-md-8 col-lg-9 article-title">
                                <h4>JUDUL LAIN</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')

@endsection
