<header>
        <div class="header-top ">
            <div class="container d-flex justify-content-end gap-5 text-white">
                <span>DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>

        <div class="header-middle">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo-container">
                    <img src="{{Vite::asset('/resources\images\dc-logo.png')}}" alt="">
                </div>
                <nav class="d-flex gap-3 align-items-center " >
                    <ul class="d-flex gap-3">
                        <li><a @class(["active"=> Route::currentRouteName()=='characters']) href="{{route('characters')}}">characters</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='comics.index']) href="{{route('comics.index')}}">comics</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='movies']) href="{{route('movies')}}">movies</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='tv']) href="{{route('tv')}}">tv</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='games']) href="{{route('games')}}">games</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='collectibles']) href="{{route('collectibles')}}">collectibles</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='videos']) href="{{route('videos')}}">videos</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='fans']) href="{{route('fans')}}">fans</a></li>
                        <li><a @class(["active"=> Route::currentRouteName()=='news']) href="{{route('news')}}">news</a></li>
                        <li id="shop">shop
                        <i class="fa-solid fa-caret-down"></i>
                        </li>
                    </ul>
                    <div class="input-group">

                        <input class='form-control' type="text" placeholder="Search" id='search' name="search">
                        <label class='form-label' for="search">
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </label>
                    </div>
                </nav>
            </div>
    </div>

        <div class="header-bottom">
            <div class='jumbo'>
                <!-- <img src="{{Vite::asset('/resources\images\jumbotron.jpg')}}" alt=""> -->
            </div>
        <!-- @if(session('message')) -->
        <div class="container">
            <section>
                <div class="alert {{session('class')}} alert-dismissible fade show" role="alert">
                    {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>
        </div>
        <!-- @endif -->
        </div>

</header>
