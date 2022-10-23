
@extends('layouts.app2') 
 @section('content') 
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


