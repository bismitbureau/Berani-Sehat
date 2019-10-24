<nav class="navbar justify-content-center">
    <span class="navbar-brand mb-0 h1">
        <a href="/">
            <img class="bs-logo" src="{{ asset('img/Berani_sehat_logo_transparent.png') }}">
        </a>
    </span>
    <div class="container center">

        <div class="row center">

            <div class="col center">
                <a href="/">
                    <h5 class="center">
                        Home
                    </h5>
                </a>
            </div>

            @foreach($categories as $category)
                <div class="col center">
                    <a href="{{ route('category', ['category_id' => $category->id]) }}">
                        <h5 class="center">
                            {{ $category->name }}
                        </h5>
                    </a>
                </div>
            @endforeach

            <div class="col center">
                <a href="https://issuu.com/beranisehatcom/docs/402937_septok">
                    <h5 class="center">
                        SKMA
                    </h5>
                </a>
            </div>

            <div class="col center">
                <div class="search-box" style="margin-top:-15px;">
                    <div class="row">
                        <a class="col-4 search-btn" href="#"><i class="fas fa-search"></i></a>
                        <form method="GET" class="col-8 search-txt" action="{{ route('search') }}" accept-charset="UTF-8" role="form">
                            <input style="text-align: left; margin-left:-30px; margin-top: 10px; font-size:15px;" type="text" name="search" class="sub-search-txt" placeholder="Type to search"/>
                            <input style="display:none;" class="btn btn-block btn-default hidden" type="submit" value="Sumbit">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
