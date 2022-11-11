{{-- お客様マイページを表した画面 
shoppermypageコンポーネントでお客様が購入された商品を取得するリストを作成する 
--}}
@extends('layouts.app2') 
 @section('content') 
 @section('title', "お客様マイページ")

<header>
@include('header.shopper.shoppermypage_header') 
</header>
<body>
    <div id=app>
        <div class="c-mypagemenu">
            <h1  class="c-mypagemenu__title">
                {{$my_user->name}}様 専用マイページ
            </h1>

                </div>
<shoppermypage-component></shoppermypage-component>
<footer-component></footer-component>
</div>
</body>

@endsection 


