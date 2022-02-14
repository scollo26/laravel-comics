@extends('guest.layout.base')

@section('documentTitle')
{{-- DC Comics | Movies --}}
{{$nomePagina}}

@endsection

@section('content')
    <div class="container-products">
        <div class="container-product">
            <div class="card-product">
                <h2>{{ $product['title']}}</h2>
                <img src=" {{$product['thumb']}}" alt="">
                <div class="description-card">
                    <h3>{{ $product['description']}}</h3>
                </div>
            </div>
            
        </div>
        
        
        

    </div>
@endsection