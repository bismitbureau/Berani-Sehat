@extends('layouts.base')

@section('extra-fonts')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
@endsection

@section('prerender-js')

@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active head-article">
                <img src="https://picsum.photos/id/200/1000/500.jpg" class="d-block h-100 w-100" alt="...">
                <div class="row unhidden title-head">
                    <div class="article-title">
                        <h1>Artikel 1</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item head-article">
                <img src="https://picsum.photos/id/209/1000/500.jpg" class="d-block h-100 w-100" alt="...">
                <div class="row unhidden title-head">
                    <div class="article-title">
                        <h1>Artikel 2</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item head-article">
                <img src="https://picsum.photos/id/210/1000/500.jpg" class="d-block h-100 w-100" alt="...">
                <div class="row unhidden title-head">
                    <div class="article-title">
                        <h1>Artikel 3</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid categories">
        <img src="https://picsum.photos/id/203/1000/500.jpg" alt="jar" class="categories-img">
        <div class="row unhidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 1</h1>
            </div>
        </div>
        <div class="row hidden">
            <div class="col-sm-6 col-10 category-txt">
                <p>uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid categories">
        <img src="https://picsum.photos/id/204/1000/500.jpg" alt="jar" class="categories-img">
        <div class="row unhidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 2</h1>
            </div>
        </div>
        <div class="row hidden">
            <div class="col-sm-6 col-10 category-txt">
                <p>uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif b
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif bee</p>
            </div>
        </div>
    </div>
    <div class="container-fluid categories">
        <img src="https://picsum.photos/id/206/1000/500.jpg" alt="jar" class="categories-img">
        <div class="row unhidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 3</h1>
            </div>
        </div>
        <div class="row hidden">
            <div class="col-sm-6 col-10 category-txt">
                <p>uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5" id="about">
        <div class="row">
            <div class="col">
                <h3>ABOUT US</h3>
                <hr>
                <h3>BERANISEHAT!</h3>
                <p>Sehat, elemen kehidupan yang diinginkan oleh setiap manusia. Tidak bisa didapat begitu
                    saja, perlu upaya yang sering kali tidak mudah untuk meraihnya. Informasi yang tepat dan
                    benar adalah kunci utamanya. Disinilah peranan Beranisehat.com, portal berita kesehatan
                    terkini. Didedikasikan oleh calon dokter masa depan demi menyehatkan bangsa Indone-
                    sia, Beranisehat.com menyajikan informasi khusus kesehatan untuk awam dan profesi
                    medis.
                </p>
            </div>
            <div class="col">
                <h3>MEDIA AESCULAPIUS</h3>
                <hr>
                <p>
                    Beranisehat.com diluncurkan pada tahun 2014 oleh Media Aesculapius, sebuah
                    badan mahasiswa di Fakultas Kedokteran Universitas Indonesia yang telah dikenal
                    sepak terjangnya sejak 1970. Selain Beranisehat.com, Media Aesculapius telah lebih
                    dari separuh abad mengirimkan Surat Kabar Media Aesculapius ke dokter-dokter di
                    seluruh pelosok Indonesia. Karya lainnya dari Media Aesculapius adalah buku Kapita
                    Selekta Kedokteran, kini telah mencapai edisi IV, yang menjadi pegangan tidak
                    hanya dokter dan mahasiswa kedokteran, namun juga kalangan keperawatan dan
                    profesi medis lainnya.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')

@endsection
