{{--
//=====================================================
//1.何をするファイルか？
/======================================================
(ファイル名）welcome.blade.php
haiki shareのトップ画面を作成しする。

//=====================================================
//2.どのような機能を含ませるか？
//=====================================================
1.開いたら一番最初に訪問できるページにする 
2.利用者用の（ログインユーザー登録ページ）とスタッフ用の（ログイン,ユーザー登録ページ）
がそれぞれある。 (全部で４つ) (モーダルに忍び込ませる。)                  
3.
4.
5.

//=====================================================
//３.簡易的なフローチャート
//=====================================================
1.ページ開く。
2.リンク先をクリックする
3.そこのページに遷移する。

//=====================================================
//4.導入したいアニメーション(主にhtml,cssのアニメーション機能)
//=====================================================
1.ボタンに触れたら色が変化する機能をつける。

//====================================================
//5.導入したい(vueの機能)
//=====================================================
1.ボタンをクリックしたらモーダルを出す機能をつけたい。（そのモーダルから、あなたは本当に
利用者ですか？スタッフですか？と言うコメントを出してモーダル上から画面遷移をさせる。


ログイン画面使用
1.お客のログイン画面
パスワードとemailが入力されてバリデーションがうまくいけば、userのmypageに遷移することができる
2.新規お客様ユーザー登録ペーじ
メールアドレスとパスワードとパスワードリマインドを施せば画面が遷移する
遷移先の画面はmypage
3.管理者用ログインページ

//管理者画面とユーザー登録画面


--}}








        @extends('layouts.app')
@section('content')



@include('rest.other.otherheader')
@php
//一言メモ logの出力先は/storage/logs/laravel.logで見れる
    logger('トップページに遷移しました')
    @endphp

{{-- パーツA部分 --}}
<header>
    <h1>haiki share</h1>
</header>
<main>
    <section>
<div>
    ここで写真を挿入するのかなぁ
</div>

<h1>haiki share</h1>
<h3>環境と安さの相乗効果</h3>

<button>買い物を始める「i1」</button>
{{-- brタグはcssで改行し直す　処理が遅れる可能性があるので --}}
<br/> 
<button>コンビニ関係者スタート
    *お客様は上記の買い物を始めるボタンから
    お入りください
</button>
</section>
</main>

<section>
    <div>
        <p>ここからパーツAデフォルトは表示させ得ない!買い物を始めるというボタンが押されたら
            表示する
        </p>
        {{-- 買い物を始めるというボタンが押されたら表示される機能を作る --}}

        <button>ログインして買い物を楽しむ</button>
        <button>ユーザー登録して買い物をする</button>
    </div>
    <div>
        <p>ここからパーツB</p>
        <button>haiki share関係者ログイン</button><br/>
        <button>haiki share関係者ユーザ登録</button>
        <p>買い物をご利用されるお客様（haiki share関係者以外）の方々は
            TOP画面の買い物を始めるをクリックしてご利用ください。
        </p>
        <h1 class="bg_text">俺の名前はevil</h1>
    </div>
</section>
<example-component></example-component>




{{--  
<a href="{{route('haiki_shopper.staff_mypage_display')}}">本当の登録画面っへs</a>
--}}
<a href="{{route('admin-register')}}">管理者用のログインページ</a> 
 <a href="{{route('admin-home')}}">管理者用</a>  


</body>
</html>
    
    @endsection

    
    
    
    
    
    
    
    
    
