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
    <nav class="navbar justify-content-center">
        <div class="search-box">
            <div class="search-box">
                <input type="text" name="" class="search-txt" placeholder="Type to search"/>
                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
            </div>
        </div>
        <span class="navbar-brand mb-0 h1">
            <h1>Berani Sehat</h1>
        </span>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/200/1000/500.jpg" class="d-block h-100 w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/201/1000/500.jpg" class="d-block h-100 w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/202/1000/500.jpg" class="d-block h-100 w-100" alt="...">
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
        <div class="row hidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 1</h1>
                <p>uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid categories">
        <img src="https://picsum.photos/id/204/1000/500.jpg" alt="jar" class="categories-img">
        <div class="orw hidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 2</h1>
                <p>uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif b
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif be
                        uf hewuewh ehufihwehuefewfb uiebuiwe ibef bewfb webfiweuif bweifbwei fiwe febfuie ifbeuif bee</p>
            </div>
        </div>
    </div>
    <div class="container-fluid categories">
        <img src="https://picsum.photos/id/206/1000/500.jpg" alt="jar" class="categories-img">
        <div class="row hidden">
            <div class="col-sm-6 col-10 category-txt">
                <h1>Kategori 3</h1>
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

    <footer class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <h2>Contact Us</h2>
                <div class="container futer">
                    <i class="fas fa-home"></i>
                    <p>MEDIA AESCULAPIUS, BEM IKM FKUI, GEDUNG C LANTAI 4, RUMPUN ILMU KESEHATAN, UI DEPOK.</p>
                </div>
                <div class="container futer">
                    <i class="fas fa-envelope"></i>
                    <p>MEDAESCULAPIUS@GMAIL.COM</p>
                </div>
            </div>
            <div class="col-lg-4 icon-mom">
                <h2 style="margin-bottom: 0;">Stay Connected</h2>
                <div class="container icons">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-line"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('extra-js')

@endsection
