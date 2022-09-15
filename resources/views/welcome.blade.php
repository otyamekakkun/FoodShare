<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>haiki share TOP画面</title>

    </head>
    <body>
        

        @extends('layouts.app')
@section('content')
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

        <button>ログインして買い物を楽しむ</button><br/>
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









@endsection














    
</body>
</html>
