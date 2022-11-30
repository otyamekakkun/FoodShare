{{--
 お客様マイページを表した画面 
shoppermypageコンポーネントでお客様が購入された商品を取得するリストを作成する 
--}}
@extends('layouts.app2') 
 @section('content') 
 @section('title', "お客様マイページ")

<header>
@include('header.shopper.shoppermypage_header') 
</header>
<body>
            <h1  class="c-detail__title">
                MyPage
            </h1>
            <div id="app">
<shoppermypage-component></shoppermypage-component>
<footer-component></footer-component>
</div>
</body>

@endsection 


