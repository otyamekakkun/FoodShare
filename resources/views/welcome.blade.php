@extends('layouts.app3')
@section('content')


<body>
<header>
    @include('rest.other.otherheader')
</header>

<aside>
    <img src="{{asset('img/top.jpg')}}" class="l-topimg">
</aside>
<div class="l-top__title"> 
<h1>haiki share</h1>
<h3>環境と安さの相乗効果</h3>
</div>

<div id="app">
    <toppage-component></toppage-component>
    <button><a class="" href="{{ route('login') }}">お客様ログイン</a></button>
   <button><a class="nav-link" href="{{ route('register') }}">お客様ユーザー登録</a></button> 


<h1>コンビニスタッフとして</h1>
 <button><a href="{{route('admin-home')}}">ログインする</a> </button> 
 <button><a href="{{route('admin-register')}}">ユーザー登録する</a> </button>

 <p>お客様がご利用される場合は上のお客様ログイン、またはお客様ユーザー登録からお入りください。</p>
</div>
</body>
</html>
    @endsection


    
    
    
    
    
    
    
    
