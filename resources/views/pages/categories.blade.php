@extends('layouts.base')

@section('extra-fonts')

@endsection

@section('prerender-js')

@endsection

@section('extra-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}">

@endsection

@section('content')


<div class="container" id="mainCategory">
<img class="d-block w-100" id="imgMain" src="{{ asset('img/categories-1.jpg') }}">
  <div class="centered">
    <h2>KATEGORI 1</h2></div>
</div>



<div class="row">
<div class="col-md-4 container pb-4" id="titleCategory">
  <img src="{{ asset('img/categories-1.jpg') }}" alt="Avatar" class="image">
  <div id="title" class="deleteTitleOnHover">
    <h2 >JUDUL 1</h2>
  </div>
  <div class="overlay">
    <div class="text">
    <h2>JUDUL 1</h2>
    <h4>Lorem ipsum dolor sit amet</h4>
    </div>
  </div>
</div>
<div class="col-md-4 container pb-4" id="titleCategory">
  <img src="{{ asset('img/categories-2.jpg') }}" alt="Avatar" class="image">
  <div id="title" class="deleteTitleOnHover">
    <h2 >JUDUL 2</h2>
  </div>
  <div class="overlay">
    <div class="text">
    <h2>JUDUL 2</h2>
    <h4>Lorem ipsum dolor sit amet</h4>
    </div>
  </div>
</div>
<div class="col-md-4 container pb-4" id="titleCategory">
  <img src="{{ asset('img/categories-3.jpg') }}" alt="Avatar" class="image">
  <div id="title" class="deleteTitleOnHover">
    <h2 >JUDUL 3</h2>
  </div>
  <div class="overlay">
    <div class="text">
    <h2>JUDUL 3</h2>
    <h4>Lorem ipsum dolor sit amet</h4>
    </div>
  </div>
</div>


@endsection

@section('extra-js')

@endsection
