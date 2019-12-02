<nav class="navbar justify-content-center">
    <div class="search-box">
        <!-- <div class="row">
            <a class="col-4 search-btn" href="#"><i class="fas fa-search"></i></a>
            <form method="GET" class="col-8 search-txt" action="{{ route('search') }}" accept-charset="UTF-8" role="form">
                <input type="text" name="search" class="sub-search-txt" placeholder="Type to search"/>
                <input class="btn btn-block btn-default hidden" type="submit" value="Sumbit">
            </form>
        </div> -->
        <div id="cat_icon"><i class="fas fa-search"></i></div>
        <div id="categories">
            <div class="panel_title">
                <form method="GET" class="form-inline" action="{{ route('search') }}" accept-charset="UTF-8" role="form">
                        <label><i class="fas fa-search"></i></label>
                        <input class="search-inp" type="text" name="search" class="" placeholder="Type to search"/>
                    <input style="display:none;" class="btn btn-block btn-default hidden" type="submit" value="Sumbit">
                </form>
            </div>
        </div>
    </div>
    <span class="navbar-brand mb-0 h1">
        <a href="/">
            <img class="bs-logo" src="{{ asset('img/Berani_sehat_logo_transparent.png') }}">
        </a>
    </span>
</nav>
