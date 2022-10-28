@extends('layouts.app3')
@section('content')


<body>
<header>
    @include('rest.other.otherheader')
</header>

<aside>
    <img src="{{asset('img/top.jpg')}}" class="l-topimg">
</aside>
<div class="l-top__titlearea">
<h1 class="l-top__title__text">haiki share</h1>
<h3 class=" l-top__title__text2">convenience store</h3>
</div>
{{-- ボタンエリアを作る --}}
<div id="app">
    <toppage-component></toppage-component>
</div>



</body>
</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
