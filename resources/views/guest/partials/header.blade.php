<header>
    <div class="header-top">
        <div class=" container-70  flex justify-contente-end">
            <span class="marg-right-10">DC POWER VISA© </span> 
            <span>ADDITIONAL DC SITES</span>
        </div>
        
    </div>
    <div class=" header-center">
        
        <div class="container ">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
            
            <ul>
                <li><a href="/Characters">Characters</a></li>
                <li ><a class="active" href="/Comics">Comics</a></li>
                <li><a href="/movies">Movies</a></li>
                <li><a href="/tv">Tv</a></li>
                <li><a href="/games">Games</a></li>
                <li><a href="/collectibles">Collectibles</a></li>
                <li><a href="/videos">Videos</a></li>
                <li><a href="/fans">Fans</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/shop">Shop <i class="fa-solid fa-angle-down"></i></a></li>
                <li><a class="active"  href="#">Search <i class="fa-solid fa-magnifying-glass"></i></a> </li>
            </ul>
        </div>
    <div class="header-bottom">

    </div>


    {{-- <li class="{{ Route::currentRouteName() }} "><a href="{{route('home')}}">Home</a></li>
    @foreach ($comics as $item)
        <div>
            {{$item["title"]}}
        </div>
        
    @endforeach --}}
    
</header>