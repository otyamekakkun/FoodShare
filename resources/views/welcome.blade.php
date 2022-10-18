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


<div class="bg">
    <h1 class="fadein">fadein（フェードイン）アニメーション</h1>
  </div>








<div id="app">
    <toppage-component></toppage-component>
</div>
</body>
</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
