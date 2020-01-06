<nav class="nav1 navbar navbar-expand-lg navbar-light justify-content-center" style="background-color: #EF4640;">
    <div class="row navbar-brand justify-content-center" style="margin-left:auto; margin-right:-50px;">
        <a href="/">
            <img class="bs-logo" src="{{ asset('img/Berani_sehat_logo_transparent.png') }}">
        </a>
    </div>

    <div class="row" style="margin-left:auto; margin-right:0;">
        <div class="right-pos menu-bar">
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
        <div class="col right-pos menu-bar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <div class="menu-bar">
        <div class="collapse navbar-collapse row" id="navbarNav">
            <ul class="navbar-nav w-100 col">
                <li class="nav-item">
                    <a href="/">
                        <h5 class="center">
                            Home
                        </h5>
                    </a>
                </li>
                @for ($i = 0; $i < count($categories); $i++)
                    @if ($category_no == 3 && $i == 2 )
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if ($category_no == 4 && $i == 3 )
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if ($category_no == 5 && $i == 3 )
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if ($category_no == 6 && $i == 4 )
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if ($category_no == 7 && $i == 4 )
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if (($category_no == 8 && $i == 3) || ($category_no == 8 && $i == 7))
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if (($category_no == 9 && $i == 3) || ($category_no == 9 && $i == 7))
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    @if (($category_no >= 10 && $i == 4) || ($category_no >= 10 && $i == 8))
                        </ul>
                        <ul class="navbar-nav w-100 col">
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('category', ['category_id' => $categories[$i]->id]) }}">
                            <h5 class="center">
                                {{ $categories[$i]->name }}
                            </h5>
                        </a>
                    </li>
                @endfor
            @if ($category_no == 2 || $category_no == 7 )
                </ul>
                <ul class="navbar-nav w-100 col">
            @endif
                <li class="nav-item">
                    <a href="https://issuu.com/beranisehatcom/docs/402937_septok">
                        <h5 class="center">
                            SKMA
                        </h5>
                    </a>
                </li>
                <li class="nav-item">
                    @if(Auth::user() == null)
                    <a href="{{ route('login.provider', 'google') }}">
                        <h5 class="center">
                            Login
                        </h5>
                    </a>
                    @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <h5 class="center">
                            Logout
                        </h5>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                </li>
            </ul>
        </div>
    </div>


</nav>
<nav class="center nav2 justify-content-center">
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
                @if(Auth::user() == null)
                <a href="{{ route('login.provider', 'google') }}">
                    <h5 class="center">
                        Login
                    </h5>
                </a>
                @else
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <h5 class="center">
                        Logout
                    </h5>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endif
            </div>
            <div class="col center">
                <div id="cat_icon"><i class="fas fa-search"></i></div>
                <div id="categories">
                    <div class="panel_title">
                        <form method="GET" class="form-inline" action="{{ route('search') }}" accept-charset="UTF-8" role="form">
                            <!-- <div class="form-group"> -->
                                <label><i class="fas fa-search"></i></label>
                                <input class="search-inp" type="text" name="search" class="" placeholder="Type to search"/>
                            <!-- </div> -->
                            <input style="display:none;" class="btn btn-block btn-default hidden" type="submit" value="Sumbit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
