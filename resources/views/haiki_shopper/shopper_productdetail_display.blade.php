{{-- 
    商品詳細画面のお客様専用で表したもの
--}}
@extends('layouts.app2')
@section('content')
@section('title', "商品詳細画面")
<body>
    <header>
        @include('header.shopper.shoppermypage_header') 
    </header>
<h1 class="c-detail__title">商品詳細</h1>
<div id="app">
    <main>
         <div> 
    <productdetail-component
        :id="'{{$products->id}}'" 
        :img="'{{$products->img_path}}'" 
        :name="'{{$products->product_name}}'" 
        :price="'{{$products->price}}'"
        :best_by_date="'{{$products->best_by_date}}'" 
        :prefecture="'{{$products->prefecture}}'"
        :bought="'{{$products->bought}}'"
        :convinience_name="'{{$products->convinience_name}}'"
        :updated_at="'{{$products->updated_at}}'"
            >
    </productdetail-component>
@if($products->bought<=0)
    <form class="" action="{{ route('bought.update',$products->id)}}" enctype="multipart/form-data" method="post">   
            <a href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow"
                class="c-productdetail__twitter" 
                >
                Twitterでシェアする
            </a>
        @csrf
        <button class="c-productdetail__button">商品を買う！</button>
    </form>
@endif

@if($products->bought>=1)
    <a  href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow"
        class="c-productdetail__twitter" >
        Twitterでシェアする</a>
    <form class=""  action="{{route('bought.cancel',$products->id)}}" enctype="multipart/form-data" method="post">
        @csrf 
            <button class="c-productdetail__button">購入をやめる</button>
    </div>  
    </form>
@endif
</main>
<footer-component></footer-component>
</div>

</body>
@endsection



