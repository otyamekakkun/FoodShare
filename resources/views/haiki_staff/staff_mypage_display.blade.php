<p>
    スタッフのマイページに遷移しました
</p>
@extends('layouts.app2')
@section('content')

<body>
<header>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
        --}}
<div class="l-header">
    <h1 class="l-header__title">haiki share</h1>
    <nav>
        <ul>
            <li>
                <div class="l-header__nav">
                {{-- ログアウト機能を代入してやる--}}
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="l-header__nav__button">
                <input class="" type="submit" value="ログアウト">
            </button>
              </form>
              <div>
            </li>
            <li>
            <div class="l-header__mypagebottom">
            <a href="{{route('haiki_shopper.staff_mypage_display')}}"><button>マイページ</a></button>
            <div>
            <li>
        </ul>
        
    </nav>
</div>
</header>
<h1>
    コンビニ側のマイページを写すものです
</h1>
<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection