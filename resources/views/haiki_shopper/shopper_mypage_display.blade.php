
@extends('layouts.app2') 
 @section('content') 
<header>
@include('header.shopper.shoppermypage_header') 
</header>





<body>
    <div id=app>
        <div class="l-shopper__mypagemenu">
            <h1  class="l-shopper__mypagemenu__title">
                {{$my_user->name}}様 専用マイページ
            </h1>
<div class="l-staffmypage__menu">
    <h1 class="l-staffmypage__title">メニュー</h1>
    <div class="l-staffmypage__buttonarea">
    <button class="c-staffmypage__button"> <a href="{{route('haiki_shopper.shopper_profile_display')}}">プロフィール編集をする</a></button>
                    <button class="c-staffmypage__button"><a href="{{route('haiki_shopper.shopper_productlist_display')}}">商品を閲覧する</a></button>
    </div>
                </div>

                </div>
        <shoppermypage-component></shoppermypage-component>
<footer-component></footer-component>
</div>
</body>

@endsection 


