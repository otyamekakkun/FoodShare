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


{{-- 
    自分が購入した商品を取得する。
    各商品ごとに詳細を見る、購入をキャンセルするボタンがある。
    自分の商品なので気にする必要はなさそう。

    vueの処理はなし
    結構後の方の処理
    
    
    --}}

@extends('layouts.app2') 


 @section('content') 
<body>
<header>
@include('rest.shopper.header') 
</header>
</body>
<h1>
    {{$my_user->name}}様
    haiki shareへようこそ！！

    {{-- マイページに表示されるのは購入フラグがきちんと立っているものが表示される。 
        ゆーざーidに入るのはログインしているユーザー出ないといけない
        ユーザーidの値と購入フラグがきちんと立っているものを取得する

        参考として商品が出品されたものを参考にするといい
        --}}

</h1>
<a class="btn_tw" href="https://twitter.com/intent/tweet?text=ここを記述するとtwitter内ですでに文が打ち込まれる;" target="_blank_" rel="nofollow"><i class="fab fa-twitter fa-fw"></i> この商品をシェアするs</a>
<main>
    <div class="l-shoppermypage">
    <div class="l-shoppermypage__exhibitarea">
    <h1>ご購入された商品一覧</h1>
    <a href="{{route('haiki_shopper.shopper_productlist_display')}}"><button>商品一覧に移動する</a></button>
{{--  
<h1>商品の画像</h1>
    <a href="{{route('haiki_shopper.shopper_productdetail_display')}}"><button>商品の詳細をみる</a></button>
<button>購入をキャンセルする</button>
--}}
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


