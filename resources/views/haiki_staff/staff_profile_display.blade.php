{{-- 

//=====================================================
//1.何をするファイルか？
/======================================================
(ファイル名）staff_profile_display.blade.php
コンビニスタッフの情報を編集することができる

//=====================================================
//2.どのような機能を含ませるか？
//=====================================================
1.staff_mypage_displayからページが遷移される
2. コンビニ名と支店名と住所とメールアドレスとパスワードをそれぞれ変更することができる画面にしてできたらdnに登録してmypageに遷移させる。
3.購入すると言うボタンを押したら、確認アラートが出て、購入することができる。（購入しても画面遷移はしない
おそらく画面をリロードさせる処理は施した方が良さそう。）
4.購入されたら、商品に購入済みというlavelが出てくる。
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
5.購入するボタンを押したら利用者と管理者に各々メールが届くシステムを作る

//=====================================================
//4.導入したいアニメーション(主にhtml,cssのアニメーション機能)
//=====================================================

//====================================================
//5.導入したい(vueの機能)
//=====================================================

//=====================================================
//6.購入していた時の状況
//=====================================================
購入されている状態では、購入できないように何らかの処理を施す必要がある。
ラベルで購入している状態を表示を出すことができる。

//=====================================================
//7.購入していない時の状況
//=====================================================
購入していない状況だったら、購入できる状態に持っていく。



 --}}
{{-- 
    ログインしているスタッフの情報をまとめて編集する
    vueはいらない
    
    --}}

@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>
@include('rest.staff.staff_profileform')
<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection