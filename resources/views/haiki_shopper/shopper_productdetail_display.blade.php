
@extends('layouts.app2')
@section('content')
<body>
    <header>
        @include('header.shopper.shopper_header') 
        </header>
{{-- 全体を決めるもの --}}
<div id="app">
    <main>
        <div class="l-productdetail__shopper">
            <div class="l-productdetail__area">
        <productdetail-component :id="'{{$products->id}}'" :img="'{{$products->img_path}}'" :name="'{{$products->product_name}}'" :price="'{{$products->price}}'"
            :best_by_date="'{{$products->best_by_date}}'" :prefecture="'{{$products->prefecture}}'" :bought="'{{$products->bought}}'"></productdetail-component>
{{-- <div class="c-productdetail__shoppermenu"> --}}
@if($products->bought<=0)
    <form class="c-productdetail__shoppermenu" action="{{ route('bought.update',$products->id)}}" enctype="multipart/form-data" method="post">
        <div class="c-shopper__action">    
            <button class="c-shopper__action__button">
                <i class="fab fa-twitter fa-fw"></i>この商品をシェアする</button> </a>        
            <a  href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow">
        @csrf
        <button class="c-shopper__action__button">商品を買う！</button>
        </div>
    </form>
@endif

@if($products->bought>=1)
    <form class="c-productdetail__shoppermenu"  action="{{route('bought.cancel',$products->id)}}" enctype="multipart/form-data" method="post">
        <div class="c-shopper__action">    
        <button class="c-shopper__action__button">
            <a  href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow"><i class="fab fa-twitter fa-fw"></i> この商品をシェアする</a></button> 
        @csrf
        <button class="c-shopper__action__button">購入をやめる</button>
    </div>  
    </form>
@endif
</div>
</main>
</div>
<footer-component></footer-component>
</div>
</body>
@endsection



