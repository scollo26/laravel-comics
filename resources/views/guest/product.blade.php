@extends('guest.layout.base')

@section('documentTitle')
{{-- DC Comics | Movies --}}
{{$nomePagina}}

@endsection

@section('content')
<main class="comic">
    <div class="bar-blue"></div>
    <div class="container ">
        <div class="comic-title">
            <img src=" {{$product['thumb']}}" alt="">
            <div>comic book</div>
            <div class="blue-title gallery">view gallery</div>
        </div>
        <div class="book-container">
            <div class="description">
                <h3>{{ $product['title']}}</h3>
                <div class="available-container">
                    <div class="left">
                        <div class="price">
                            <span>U.S Price: </span><span>{{$product['price']}}</span>
                        </div>
                        <div class="available">
                            <span>available</span>
                        </div>
                    </div>
                    <div class="right check-availability">
                        <div class="text-availability">
                            <span>check availability</span>
                            <i class="fa-solid fa-sort-down"></i>
                        </div>
                    </div>
                </div>
                <div class="text-description">
                    <p>{{$product['description']}}</p>
                </div>
            </div>
            <div class="adv-container">
                <span>advertisement</span>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
        
    </div>
    <div class="container-100">
        <div class="table">
            <div class="table-left">
                <h2 class="marg-left-40">Talent</h2>
                <div class="art-by">
                    <p>Art by:</p>
                    <div class="art">
                        @foreach ($product['artists'] as $arti)
                            @if($loop->last)
                            <span><a href="#">{{$arti}}</a></span>
                            @else
                            <span><a href="#">{{$arti}}</a>,</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="art-by">
                    <p>Written by :</p>
                    <div class="art">
                        @foreach ($product['artists'] as $arti)
                            @if($loop->last)
                            <span><a href="#">{{$arti}}</a></span>
                            @else
                            <span><a href="#">{{$arti}}</a>,</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                
            </div>
            <div class="table-right">
                <div class="marg-left-40">
                    <h2 >Specs</h2>
                </div>
                
                <div class="series">
                    <p>Series</p>
                    <div class="serie marg-left-40">
                        <a href="http://">{{$product['series']}}</a> 
                    </div> 
                </div>
                <div class="series">
                    <p>U.S Price:</p>
                    <div class="serie marg-left-40">
                        {{$product['price']}}
                    </div> 
                </div>
                <div class="series">
                    <p>On Sale Date:</p>
                    <div class="serie marg-left-40">
                        <span>{{ date_format(date_create($product['sale_date']),'M d Y') }}</span>
                    </div> 
                </div>

            </div>
        </div>
        

    </div>


</main>

    
@endsection