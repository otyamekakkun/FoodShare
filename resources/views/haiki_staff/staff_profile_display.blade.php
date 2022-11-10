
@extends('layouts.app2')
@section('content')
@section('title', "コンビニプロフィール編集")
<body>
    <header>
        @include('header.staff.staff_header')
    </header>
    <section>
        <form  action="{{route('haiki_staffrprofile_edit',$admin->id)}}" method="POST">
            @csrf
            <div class="c-form2">
                <div class="c-form__area">

            <h3 class="c-form__title">コンビニ情報編集</h3>
                <span class="c-form__area__message">名前:
                    @error('name')
                    <span class="c-errormessage" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </span>
                <br/>
                <input class="c-form__area__text" action="post" type="text" name="name" placeholder="名前を編集" value="{{$admin->name}}">
<br/>

<span class="c-form__area__message">メールアドレス編集:
                @error('email')
                <span class="c-errormessage" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </span>
            <br/>
            <input class="c-form__area__text" action="post" type="text" name="email" placeholder="メールアドレス編集" value="{{$admin->email}}">
            <br/>
{{-- メールアドレス編集のエラーメッセージ処理終了 --}}

{{--  --}}

<span class="c-form__area__message">パスワード:
    @error('password')
    <span class="" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
    
</span>
<br/>
            <input class="c-form__area__text" action="post" type="password" name="password" placeholder="パスワード編集">
            <br/>
{{-- パスワード入力ここまで --}}

<span class="c-form__area__message">パスワード再入力:
    @error('password_confirmation')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</span>
<br/>
        <input class="c-form__area__text" type="password" class="c-form__area__text" name="password_confirmation" required autocomplete="new-password">
<br/>
        {{-- パスワード再入力ここまで --}}
<span class="c-form__area__message">コンビニ名:
    @error('convinience_name')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror     
</span>
<br/>
            <input class="c-form__area__text" action="post" type="text" name="convinience_name" placeholder="コンビニ名" value="{{$admin->convinience_name}}">
            <br/>
<span class="c-form__area__message">支店名:
    @error('convinience_branch')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror    
</span>
<br/>

            <input class="c-form__area__text" action="post" type="text" name="convinience_branch" placeholder="支店名" value="{{$admin->convinience_branch}}">
            <br/>
            {{-- 支店名ここまで --}}
<div class="c-formstaff__adressarea">
<h1 class="c-form__adresstitle">住所記入欄</h1>
            <span class="c-formstaff__prefecture">都道府県選択:
                @error('prefecture')
                <span class="c-errormessage" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror    
            </span>
<select name="prefecture" class="c-formstaff__prefecture__text" value="{{$admin->prefecture}}">
    {{-- <option selected>都道府県</option> --}}
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
<br/>
{{-- 都道府県ここまで --}}
<span class="c-formstaff__adress">都道府県以外の住所:
    @error('adress')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror    
</span>
<br/>
<textarea name="adress"  value="{{$admin->adress}}" class="c-formstaff__adress__text"></textarea>
</textarea>
{{-- 住所変更ここまで --}}
</div>

            <input type="submit" class="c-register__custombutton" value="変更する">

            </div>
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