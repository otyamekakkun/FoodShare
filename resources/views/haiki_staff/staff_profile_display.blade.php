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
    <section>
        <form class="l-form" action="{{route('haiki_staffrprofile_edit',$admin->id)}}" method="POST">
            @csrf
            <div class="l-formstaffprofile">
            <h3 class="l-formstaffprofile__title">コンビニ情報編集画面</h3>
            <div class="l-formstaffprofile__te">






                <span>名前:
                    @error('name')
                    <span class="" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </span>
                <br/>
                <input class="l-formstaffprofile__text" action="post" type="text" name="name" placeholder="メールアドレス編集" value="{{$admin->name}}">
    
<br/>



<span>メールアドレス編集:
                @error('email')
                <span class="" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </span>
            <br/>
            <input class="l-formstaffprofile__text" action="post" type="text" name="email" placeholder="メールアドレス編集" value="{{$admin->email}}">
{{-- メールアドレス編集のエラーメッセージよう --}}
{{--  --}}
            <input class="l-formstaffprofile__text" action="post" type="password" name="password" placeholder="パスワード編集">

            @error('password')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="password" name="password2" placeholder="パスワード再入力">

            @error('password2')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="text" name="convinience_name" placeholder="コンビニ名" value="{{$admin->convinience_name}}">

            @error('convinience_name')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="text" name="convinience_branch" placeholder="支店名" value="{{$admin->convinience_branch}}">

            @error('convinience_branch')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror


<select name="prefecture" class="l-formstaffprofile__text" value="{{$admin->prefecture}}">
    <option selected>都道府県</option>
    <option value="北海道">北海道</option>
    <option value="青森県">青森県</option>
    <option value="岩手県">岩手県</option>
    <option value="宮城県">宮城県</option>
    <option value="秋田県">秋田県</option>
    <option value="山形県">山形県</option>
    <option value="福島県">福島県</option>
    <option value="茨城県">茨城県</option>
    <option value="栃木県">栃木県</option>
    <option value="群馬県">群馬県</option>
    <option value="埼玉県">埼玉県</option>
    <option value="千葉県">千葉県</option>
    <option value="東京都">東京都</option>
    <option value="神奈川県">神奈川県</option>
    <option value="新潟県">新潟県</option>
    <option value="富山県">富山県</option>
    <option value="石川県">石川県</option>
    <option value="福井県">福井県</option>
    <option value="山梨県">山梨県</option>
    <option value="長野県">長野県</option>
    <option value="岐阜県">岐阜県</option>
    <option value="静岡県">静岡県</option>
    <option value="愛知県">愛知県</option>
    <option value="三重県">三重県</option>
    <option value="滋賀県">滋賀県</option>
    <option value="京都府">京都府</option>
    <option value="大阪府">大阪府</option>
    <option value="兵庫県">兵庫県</option>
    <option value="奈良県">奈良県</option>
    <option value="和歌山県">和歌山県</option>
    <option value="鳥取県">鳥取県</option>
    <option value="島根県">島根県</option>
    <option value="岡山県">岡山県</option>
    <option value="広島県">広島県</option>
    <option value="山口県">山口県</option>
    <option value="徳島県">徳島県</option>
    <option value="香川県">香川県</option>
    <option value="愛媛県">愛媛県</option>
    <option value="高知県">高知県</option>
    <option value="福岡県">福岡県</option>
    <option value="佐賀県">佐賀県</option>
    <option value="長崎県">長崎県</option>
    <option value="熊本県">熊本県</option>
    <option value="大分県">大分県</option>
    <option value="宮崎県">宮崎県</option>
    <option value="鹿児島県">鹿児島県</option>
    <option value="沖縄県">沖縄県</option>
    </select>
    </select>
            <input class="l-formstaffprofile__text" action="post" type="text" name="adress" placeholder="住所" value="{{$admin->adress}}">

            @error('adress')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input type="submit" class="l-formstaffprofile__sub" value="変更する">
        </div>
        </form>
        </div>
        </section>
        

<div id="app">
<footer-component>
</footer-component>
</div>
</body>
@endsection