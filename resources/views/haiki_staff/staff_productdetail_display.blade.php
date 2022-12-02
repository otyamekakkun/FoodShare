{{-- 
    商品詳細画面
    --}}
@extends('layouts.app2') @section('content') @section('title', "商品詳細画面")
<body>
    <header>@include('header.staff.staffmypage_header')</header>
    <h1 class="c-detail__title">商品詳細</h1>
    <div id="app">
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
            ></productdetail-component>
            <a href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow"
                class="c-productdetail__twitter" 
                >
                Twitterでシェアする
            </a>
            <div class="u-productdetail"></div>
    <footer-component></footer-component>
</div>
</body>
@endsection
