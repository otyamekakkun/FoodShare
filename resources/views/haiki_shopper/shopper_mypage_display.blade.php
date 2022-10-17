
@extends('layouts.app2') 
 @section('content') 
<header>
@include('rest.shopper.header') 
</header>
<body>
    <div id=app>
        <div class="l-shopper__mypagemenu">
            <h1  class="l-shopper__mypagemenu__title">
                {{$my_user->name}}様 専用マイページ
            </h1>
<div class="l-shopper__mypagemenu__list">
    <h1 class="l-shopper__mypage__list__title">{{$my_user->name}}様のプロフィールを編集する</h1>
    <button class="l-shopper__mypagemenu__list__button"> <a href="{{route('haiki_shopper.shopper_profile_display')}}">プロフィール編集をする</a></button>
                <main>
                    <h1 class="l-shopper__mypage__list__title">商品閲覧</h1>
                    <button class="l-shopper__mypagemenu__list__button"><a href="{{route('haiki_shopper.shopper_productlist_display')}}">商品を閲覧する</a></button>

                </div>

                </div>
        <shoppermypage-component></shoppermypage-component>
<footer-component></footer-component>
</div>
</body>

@endsection 


