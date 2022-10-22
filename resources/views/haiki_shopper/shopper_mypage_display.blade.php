
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
<div class="l-staffmypage__menu"></div>

                </div>
        <shoppermypage-component></shoppermypage-component>
<footer-component></footer-component>
</div>
</body>

@endsection 


