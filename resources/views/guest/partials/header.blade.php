<header>
    <div class="header-top">
        <div class=" container-70  flex justify-contente-end">
            <span class="marg-right-10">DC POWER VISA© </span> 
            <span>ADDITIONAL DC SITES</span>
        </div>
        
    </div>
    <div class=" header-center">
        
        <div class="container-sx ">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <div class="container-dx">
            <ul>
                <li><a class="{{'Characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('Characters')}}">Characters</a></li>
                <li ><a class="{{'comics' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('comics')}}">Comics</a></li>
                <li><a class="{{'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('movies')}}">Movies</a></li>
                <li><a class="{{'tv' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('tv')}}">Tv</a></li>
                <li><a class="{{'games' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('games')}}">Games</a></li>
                <li><a class="{{'collectibles' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('collectibles')}}">Collectibles</a></li>
                <li><a class="{{'videos' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('videos')}}">Videos</a></li>
                <li><a class="{{'fans' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('fans')}}">Fans</a></li>
                <li><a class="{{'news' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('news')}}">News</a></li>
                <li><a clas href="{{route('shop')}}">Shop <i class="fa-solid fa-angle-down"></i></a></li>
                <li><input type="text" placeholder="Search"><i class="fas fa-search"></i></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="jambo">
        </div>

    </div>
</header>