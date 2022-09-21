{{--
//=====================================================
//1.何をするファイルか？
/======================================================
(ファイル名）shopper_mypage_display.blade.php
コンビニ利用者のマイページを表示する

//=====================================================
//2.どのような機能を含ませるか？
//=====================================================
1.利用者としてログインされたら、ページが開く仕組み（ログインしたら、一番最初に訪問できるページにする ）
2.購入した商品を一覧表示できる機能があるがその時、twitterでシェア機能もつける。           
3.ログインしていない状況でファイルは入れないようにする（middlewareを用いる。)
4.
5.

//=====================================================
//３.画面遷移先
//=====================================================
1.ログアウトボタン（ログアウトされてトップページに戻る。)
2.プロフィール編集ボタン（プロフィール編集画面 shopper_productdetail画面に遷移する
3.マイページの表示画面として、購入した商品一覧が最新５軒ずつ載せる。(その商品ごとに
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
        
        {{-- ヘッダー部分 --}}
        {{-- 
<div class="l-header">
    <h1 class="l-header__title">haiki share</h1>
    <nav>
        <ul>
            <li>
                <div class="l-header__nav">
                    --}}
                {{-- ログアウト機能を代入してやる--}}
                 {{-- 
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="l-header__nav__button">
                <input class="" type="submit" value="ログアウト">
            </button>
              </form>
              <div>
            </li>
        </ul>  
    </nav>
</div>
</header>
--}}
@include('rest.shopper.header') 
</header>
{{-- <h1>rest</h1> --}}

{{-- boxを作るdivタグにしたい --}}


</body>

<main>
    <div class="l-shoppermypage">
    <div class="l-shoppermypage__exhibitarea">
    <h1>自分のコンビニが出品した商品</h1>
    <button><a href="{{route('haiki_shopper.staff_productedit_display')}}"><button>出品した商品一覧を表示</a></button>
    <h1>ご購入された商品一覧</h1>
    <a href="{{route('haiki_shopper.shopper_productlist_display')}}"><button>商品一覧に移動する</a></button>
<h1>商品の画像</h1>
    <a href="{{route('haiki_shopper.shopper_productdetail_display')}}"><button>商品の詳細をみる</a></button>
<button>購入をキャンセルする</button>

    </div>
    
    <div class="l-staffmypage__side">
    <p>メニュー</p>
    <a href="{{route('haiki_shopper.shopper_profile_display')}}"><button>利用者プロフィール編集画面</a></button>
    </div>
    </div>
    

    
    
    
    </main>
    
    









<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
        エリアが最下部にならないように定義したもの --}}
<footer-component></footer-component>
</div>
@endsection 


