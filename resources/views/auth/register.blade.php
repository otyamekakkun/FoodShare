@extends('layouts.app3')

@section('content')
@include('rest.other.otherheader')
                <div class="">{{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Register') }}</div>

                {{-- {{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Register') }} --}}
                {{-- この部分は関係ない --}}
                    @isset($authgroup)
                    <form method="POST" action="{{ url("register/$authgroup") }}">
                        <div class="l-login">
                        {{-- <div class="l-login"> --}}
<h1>コンビニスタッフユーザー登録</h1>
 @else
 {{-- この部分は関係ない --}}
 {{-- ここからユーザー登録ページ併用 --}}
                    <form method="POST" action="{{ route('register') }}">
                    @endisset
                        @csrf
                        <div class="l-register__common">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                            {{--ユーザー登録ボタンここまで  --}}

                            <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="l-register__common__sentence @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="email" class="">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="l-register__common__sentence @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" class="l-register__common__sentence @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class="l-register__common__sentence">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="l-register__common__sentence" name="password_confirmation" required autocomplete="new-password">
                            </div> 
                            {{-- ここまで併用のdiv --}}
                            

                        @isset($authgroup)
                        <form method="POST" action="{{ url("register/$authgroup") }}">

                            {{-- ここまで共通のユーザー登録ページ --}}
                            {{-- ここから管理者用のユーザー登録ページ --}}

                            {{-- ユーザー登録ページのコンビニ名 --}}
    @csrf
<p>勤めているコンビニの会社</p>
<input type="text" placeholder="勤めているコンビニの会社を記述してください" name="convinience_name">

{{-- ユーザー登録ページのコンビニ名ここまで --}}

{{-- ユーザー登録ページの支店名ここから --}}
<div class="">
<p>支店名記入欄</p>
<input type="text" placeholder="支店名記入欄" name="convinience_branch">
{{-- ユーザー登録ページ支店名ここまで --}}
{{-- ユーザー登録住所ここから --}}
<p>住所</p>
<select name="prefecture">
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



<input type="text" placeholder="都道府県以外の住所記述" name="adress"> 




                            @endisset
                            {{-- ユーザー登録ここまで --}}
{{--ユーザー登録ボタン  --}}
                            </div>
                            
<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter


                    <select name="price">
                <option selected>金額は？
                    <option value=100>100</option>
                    <option value=200>200</option>
                    <option value=300>300</option>
            </select>
            //実験けっかでこれはうまくいく

        エリアが最下部にならないように定義したもの --}}
<incompletefooter-component></incompletefooter-component>
</div>
@endsection
