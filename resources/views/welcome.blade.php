{{--トップ画面を作成する画面 --}}
@extends('layouts.app3')
@section('content')
<header>
    @include('header.other.otherheader')
</header>
{{-- l-top__title__text --}}
<body>

 {{-- <div class="l-top"> --}}
    <div class="l-topimg">
    <img src="https://s3.ap-northeast-1.amazonaws.com/webukatu-haikikaku.com/awss3/toppage.jpg">
    <a href="login">
        お客様ログイン
    </a>
    <br />
    <a href="./register">
        お客様ユーザー登録
    </a>
    <br />
    <a href="./login/admin">
        コンビニログイン
    </a>
    <br />
    <a href="./register/admin">
        コンビニユーザー登録
    </a>
    <br />


{{-- <h1 class="">haiki share</h1> --}}
{{-- <h3 class="">convenience store</h3> 
    <a href="login">
        お客様ログイン
    </a>
    <br />
    <a href="./register">
        お客様ユーザー登録
    </a>
    <br />
    <a href="./login/admin">
        コンビニログイン
    </a>
    <br />
    <a href="./register/admin">
        コンビニユーザー登録
    </a>
    <br />
--}}

    </div>
    </div>
</body>

</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
