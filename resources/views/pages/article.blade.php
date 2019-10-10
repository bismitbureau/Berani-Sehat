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
<!DOCTYPE html> 
<html lang="en">

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    </head> 

    <nav class="navbar justify-content-center"> 
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
    <span class="navbar-brand mb-0 h1"> 
    <h1>Berani Sehat</h1> 
    </span> 
</nav> 

<body>
    <div class="container-fluid headerkategori"> 
    </div>
    
    <div class="container boxshadow">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">JUDUL 1</h5>
                    <h6 class="card-subtitle mb-2 text-muted">01/09/2019 07.00 WIB</h6>
                    <h6 class="card-subtitle mb-2 text-muted">OLEH: ANWSEJDIE</h6>
                    <div class="container icons"> 
                        <i class="fab fa-facebook-square"></i> 
                        <i class="fab fa-line"></i> 
                        <i class="fab fa-instagram"></i> 
                    </div> 
                    <div class="row">
                    <div class="col-md-8">
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
                    <div class="col-md-4">
                        <img src="/img/Berani_sehat_logo.jpg" class="imgarticle">
                        <img src="/img/Berani_sehat_logo.jpg" class="imgarticle">
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <h3 class="card-subtitle mb-2">DROP YOUR COMMENT HERE!</h3>
                        </div>
                    </div>
                    
                    <div class="row marginbottom">
                        <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="commentarticle" placeholder="type your comment here">
                        </div>
                        <button type="submit" class="btn btn-danger mb-2">POST!</button>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                       <u><h3>ARTICLE TERKAIT</h3></u>
                    </div>
                    </div>
                    
                    <div class="row marginbottom">
                        <div class="col-md-1">
                            <img src="/img/Berani_sehat_logo.jpg" class="icon">
                        </div>
                        <div class="col-md-11">
                            <h4>JUDUL LAIN</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid"> 
    <div class="row"> 
    <div class="col"> 
    <h2>Contact Us</h2> 
    <div class="container futer"> 
    <i class="fas fa-home"></i> 
    <p>gbhf heuewfhwe hweifh wehfihewhwefh iweh fuwe f weuifhwufh uwef uffeiwf .</p> 
    </div> 
    <div class="container futer"> 
    <i class="fas fa-envelope"></i> 
    <p>gbhf heuewfhwe hweifh wehfihewhwefh iweh fuwef uffeiwf uiw wefu wef uweufwe.</p> 
    </div> 
    </div> 
    <div class="col-4 icon-mom"> 
    <h2>Stay Connected</h2> 
    <div class="container icons"> 
    <i class="fab fa-facebook-square"></i> 
    <i class="fab fa-line"></i> 
    <i class="fab fa-instagram"></i> 
    </div> 
    </div> 
    </div> 
    </footer> 

</body>
</html>


@endsection

@section('extra-js')

@endsection
