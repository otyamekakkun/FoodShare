@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>
<div class="l-shopper__mypagemenu">
<h1 class="l-staffmypage__title">
    {{$admin->convinience_name}}所属 {{$admin->name}}様専用メニュー
</h1>
<div class="l-staffmypage__menu">
<h1 class="l-staffmypage__title"> メニュー</h1>
<div class="l-staffmypage__buttonarea">
<button class="c-staff__action__button"><a href="{{route('haiki_shopper.staff_profile_display')}}">コンビニ情報編集</a></button>
<button class="c-staff__action__button"><a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}">出品する</a></button>
<button class="c-staff__action__button"> <a href="{{route('haiki_shopper.staff_buyproduct_display')}}">購入された商品リスト</a></button>
<button class="c-staff__action__button"><a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}">出品した商品リスト</a></button>
</div>
</div>
</div>

<div id="app">
{{-- コンポーネント部分 --}}
<staffmypage-componennt></staffmypage-componennt>
<staffmypagebought-componennt></staffmypagebought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection


{{-- /<div class="l-shopper__mypagemenu"> 
    
    
     l-shopper__mypagemenu 
    
    
    
    --}}
