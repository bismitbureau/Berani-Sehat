<nav class="navbar justify-content-center">
    <div class="search-box">
        <div class="row">
            <a class="col-4 search-btn" href="#"><i class="fas fa-search"></i></a>
            <form method="GET" class="col-8 search-txt" action="{{ route('search') }}" accept-charset="UTF-8" role="form">
                <input type="text" name="search" class="sub-search-txt" placeholder="Type to search"/>
                <input class="btn btn-block btn-default hidden" type="submit" value="Sumbit">
            </form>
        </div>
    </div>
    <span class="navbar-brand mb-0 h1">
        <a href="/">
            <img class="bs-logo" src="{{ asset('img/Berani_sehat_logo_transparent.png') }}">
        </a>
    </span>
</nav>
