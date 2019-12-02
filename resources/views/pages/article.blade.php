@extends('layouts.base2')

@section('title', $post->title)

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

        <div class="container-fluid headerkategori" style="background-image: url({{ asset($post->category->pict) }})">
            <div class="container center-when-small">
                {{ $post->category->name }}
            </div>
        </div>

        <div class="container boxshadow">
            <div classs="row" onloadedmetadata="">
                <div class="card col-md-12">
                    <div class="card-body">
                        <h5 class="card-title center-when-small">
                            {{ $post->title }}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted center-when-small">{{ $post->created_at->toDayDateTimeString() }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted center-when-small">OLEH: {{ $post->user->name }}</h6>
                        <div class="sosmed-artikel center-when-small">
                            <a href="https://www.facebook.com/media.aesculapius">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="http://line.me/ti/p/~@wxx0340z">
                                <i class="fab fa-line"></i>
                            </a>
                            <a href="https://www.instagram.com/mediaaesculapius">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-12">
                            {!! $post->body !!}
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
                                @if(Auth::user() == null)
                                    <a href="{{ route('login.provider', 'google') }}" class="col-3 btn btn-danger mb-2">{{ __('Google Sign in') }}</a>
                                @else
                                    <button type="submit" class="col-3 btn btn-danger mb-2">POST!</button>
                                @endif
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
                                        @if($comment->user->avatar)
                                            <img class="d-flex mr-3 rounded-circle" height="40" weight="40" src="{{ $comment->user->avatar }}" alt="avatar">
                                        @else
                                            <img class="d-flex mr-3 rounded-circle" height="40" weight="40" src="{{ asset('img/Berani_sehat_icon.png') }}" alt="avatar">
                                        @endif
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

                        @foreach($relatedPosts as $relatedPost)
                            <div class="row section-title">
                                <div class="col-3 col-lg-3 article-picture">
                                    <a href="{{ route('post', ['post_id' => $relatedPost->id]) }}">
                                        <img src="{{ asset($relatedPost->pict) }}">
                                    </a>
                                </div>
                                <div class="col-9 col-lg-9 article-title">
                                    <a href="{{ route('post', ['post_id' => $relatedPost->id]) }}">
                                        <h4>{{ $relatedPost->title }}</h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bottom">
    </div>
@endsection

@section('extra-js')

@endsection
