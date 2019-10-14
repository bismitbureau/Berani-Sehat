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
                Kategori 1
            </div>
        </div>

        <div class="container boxshadow">
            <div classs="row" onloadedmetadata="">
                <div class="card col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">JUDUL 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">01/09/2019 07.00 WIB</h6>
                        <h6 class="card-subtitle mb-2 text-muted">OLEH: ANWSEJDIE</h6>
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
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi commodi, incidunt in omnis quaerat
                            illum consequatur facere perspiciatis temporibus voluptates
                            sed quae magni? Quae necessitatibus, corrupti debitis cumque exercitationem enim! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat cumque amet beatae nihil atque. Deserunt necessitatibus suscipit, atque,
                            rem corporis voluptatibus illo nemo quas quisquam voluptas esse facere, sunt natus?</p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, porro dolorum officiis error saepe iste
                            dolorem quibusdam voluptas natus nihil quia sunt illum ad, vero soluta explicabo. Distinctio, doloremque perspiciatis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi est consequatur debitis numquam, corporis fuga repellat beatae
                            assumenda nostrum, provident rem quam fugiat facilis explicabo enim ab nisi reiciendis?</p>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi commodi, incidunt in omnis quaerat
                            illum consequatur facere perspiciatis temporibus voluptates
                            sed quae magni? Quae necessitatibus, corrupti debitis cumque exercitationem enim! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat cumque amet beatae nihil atque. Deserunt necessitatibus suscipit, atque,
                            rem corporis voluptatibus illo nemo quas quisquam voluptas esse facere, sunt natus?</p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, porro dolorum officiis error saepe iste
                            dolorem quibusdam voluptas natus nihil quia sunt illum ad, vero soluta explicabo. Distinctio, doloremque perspiciatis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi est consequatur debitis numquam, corporis fuga repellat beatae
                            assumenda nostrum, provident rem quam fugiat facilis explicabo enim ab nisi reiciendis?</p>
                        </div>
                        </div>

                        <div class="row section-title">
                            <div class="col-md-12">
                            <h3 class="card-subtitle mb-2">DROP YOUR COMMENT HERE!</h3>
                            </div>
                        </div>

                        <div class="marginbottom">
                            <form class="row form-inline">
                                <div class="col-9 form-group mb-2">
                                    <input type="text" class="container-fluid form-control" id="commentarticle" placeholder="type your comment here">
                                </div>
                                <button type="submit" class="col-3 btn btn-danger mb-2">POST!</button>
                            </form>
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
