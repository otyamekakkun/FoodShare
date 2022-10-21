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
<h1 class="l-top__title__text">haiki share</h1>
<h3>環境と安さの相乗効果</h3>
</div>
<div id="app">
    <toppage-component ></toppage-component>
    <footer-component></footer-component>
</div>
</body>
</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
