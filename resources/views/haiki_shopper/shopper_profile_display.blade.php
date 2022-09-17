{{-- 
//=====================================================
//1.何をするファイルか？
/======================================================
(ファイル名）shopper_profile_display.blade.php
利用者のユーザー情報を編集する画面にする

//=====================================================
//2.どのような機能を含ませるか？
//=====================================================
1.mypageから遷移される
2.メールアドレスとパスワードを編集することができて編集したら、dbに登録して、mypageに戻る使用を作る。         
3.デフォルト状態でもmypageに戻る仕様とログアウト機能も含ませとく。
4.
5.

//=====================================================
//３.画面遷移先
//=====================================================
1.ログアウトボタン（ログアウトされてトップページに戻る。)
2.マイページに戻るボタン(警告で編集中の内容は保存されません。と言う表示を出してmypageに遷移させる。)
3.マイページの表示画面として、購入した商品一覧が５軒ずつ載せる。(その商品ごとに
詳細をみるボタン、購入をキャンセルするボタンがある。(詳細をみるボタンを押したら画面遷移する。)
購入をキャンセルするボタンが押したら、アラートかモーダルを表示させて商品をキャンセルする仕組みを作る。s)
4.商品を見るというボタンがあり（そこから商品一覧ページに飛ばすことができる。

//=====================================================
//4.導入したいアニメーション(主にhtml,cssのアニメーション機能)
//=====================================================
1.ボタンに触れたら色が変化する機能をつける。

//====================================================
//5.導入したい(vueの機能)
//=====================================================
1.ボタンをクリックしたらモーダルを出す機能をつけたい。（そのモーダルから、あなたは本当に
利用者ですか？スタッフですか？と言うコメントを出してモーダル上から画面遷移をさせる。
 --}}
 @extends('layouts.app2')
 @section('content')
<body>
        {{-- 共通箇所１s --}}
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
            <a href="{{route('haiki_shopper.shopper_mypage_display')}}"><button>マイページ</a></button>
            <div>
            <li>
        </ul>
        
    </nav>
</div>
</header>

<main>
    <div class="l-main">
<div></div>

{{-- boxを作るdivタグにしたい --}}
<section>
<div class="img">
    <div>
<form>
    @csrf
    <h3>???様 プロフィール編集</h3>
    <input action="post" type="text" name="" placeholder="メールアドレス編集">
    <input action="post" type="text" name="" placeholder="パスワード編集">
    <input action="post" type="text" name="" placeholder="パスワード再入力">
<input type="submit" value="内容を変更する">

</form>
    </div>
</div>
</section>

<div class="img"></div>
</div>
</main>
</body>

<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
        エリアが最下部にならないように定義したもの --}}
<incompletefooter-component></incompletefooter-component>
</div>

@endsection