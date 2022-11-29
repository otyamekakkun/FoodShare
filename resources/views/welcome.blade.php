{{--トップ画面を作成する画面 --}}
@extends('layouts.app3')
@section('content')
<header>
    @include('header.other.otherheader')
</header>
{{-- l-top__title__text --}}
<body>

 <div class="l-top" id="app">
    <div class="l-topimg">
    <img src="https://s3.ap-northeast-1.amazonaws.com/webukatu-haikikaku.com/awss3/toppage.jpg" class="l-topimg__area">
   <p class="c-topfooter"> © 2022 taguchi kakuto</p>
   
</div>
    <div class="l-top__titlearea">
    <a href="login" class="l-top__titlearea__text">
        Custom Login
    </a>
    <br />
    <a href="./register" class="l-top__titlearea__text">
        Custom Register
    </a>
    <br />
    <a href="./login/admin" class="l-top__titlearea__text">
        Admin Login
    </a>
    <br />
    <a href="./register/admin" class="l-top__titlearea__text">
        Admin Register
    </a>
    <br/>
    </div>
    </div>
    {{-- 
<footer>
    © 2022 taguchi kakuto
</footer>
 --}}
 {{-- 
<style>
    footer{
        background: white;
        width: 52%;
        height:250px;
    }
</style>
 --}}
</body>

</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
