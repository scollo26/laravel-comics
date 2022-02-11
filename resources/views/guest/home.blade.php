@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}

@section('content')
<main>
    <div class="jambo">
    </div>
    <div class="cards-containers">
        <div class="cards-container">
            @foreach ($comics as $item)
                <div class="card-container">
                    <img src=" {{$item['thumb']}}" alt="">
                    {{$item["title"]}}
                </div>
            
            @endforeach 
            
        </div>
        <div class="load text-center">
            <button class="button ">LOAD MORE</button>
        </div>
    </div>
    <div class="icons">
        <ul>
            <li>
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                
                DIGITAL COMICS
            </li>
            <li>
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    DC MERCHANDISE
            </li>
            <li>
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                SUBSCRIPTIONS
            </li>
            <li>
                <img id="small" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                COMIC SHOP LOCATOR
            </li>
            <li>
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                DC POWER VISA
            </li>
        </ul>
        
        
        
        
        
        
        
        
        </div>
    
    
</main>
    
@endsection