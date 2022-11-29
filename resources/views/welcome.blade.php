{{--トップ画面を作成する画面 --}}
@extends('layouts.app3')
@section('content')
<body>
    {{--
<header>
    @include('header.other.otherheader')
</header>
  --}}
<body>
    <div class="l-top">
    <div class="l-topimg"></div>
<div class="l-top__titlearea">
<h1 class="l-top__title__text">haiki share</h1>
<h3 class="l-top__title__tex">convenience store</h3>
{{-- ボタンエリアを作る --}}
<div id="app">
    <toppage-component></toppage-component>
</div>
</div>
</body>

</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
