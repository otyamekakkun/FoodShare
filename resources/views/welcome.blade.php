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

<div class="l-top__area">
    <div class="l-top__area__form__custom">
        <h1>買い物を始める</h1>
        <div class="l-top__area__form__custom__button">
            <button class="c-top__button">
                <a href="login">お客様ログイン</a>
            </button>
            <button class="c-top__button">
                <a class="nav-link" href="./register">お客様ユーザー登録</a>
            </button>
        </div>
    </div>
        <div class="l-top__area__form__custom">
            <h1>コンビニスタッフとして</h1>
            <div class="l-top__area__form__custom__button">
                <button class="c-top__button">
                    <a href="./login/admin">コンビニログイン</a>
                </button>
                <button class="c-top__button">
                    <a href="./register/admin">コンビニユーザー登録</a>
                </button>
                <p>
                    お客様がご利用される場合は上のお客様ログイン,またはお客様ユーザー登録からお入りください
                </p>
            </div>
        </div>
    </div>

</div>






    <footer-component></footer-component>
</div>
</body>
</html>
    @endsection


    
    
        
        
    
    
    
    
    
    
