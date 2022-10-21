{{--  
ログイン画面使用
1.お客のログイン画面
パスワードとemailが入力されてバリデーションがうまくいけば、userのmypageに遷移することができる
2.新規お客様ユーザー登録ペーじ
メールアドレスとパスワードとパスワードリマインドを施せば画面が遷移する
遷移先の画面はmypage
ログインしている状態ではなければ自動的にページがはねられる設計にする
3.管理者用ログインページ

//管理者画面とユーザー登録画面
--}}

@extends('layouts.app3')

@section('content')
@include('rest.other.otherheader')

                <div>{{ isset($authgroup) ? ucwords($authgroup) : ""}}</div>
{{-- 管理者ログインページここから --}}
                    @isset($authgroup)
                    <p>コンビニスタッフ専用ログインページ</p>
                    <p>利用者は普通のログインページで記述してください</p>
                    <form method="POST" action="{{ url("login/$authgroup") }}">
                    @else
                    {{-- 管理者ログインページここまで --}}
                    {{-- ここから最後までユーザー登録者用と管理者用併用のログインページ --}}
                    <div class="l-login">
                        <h1 class="l-login__title">ログイン</h1>
                    <form method="POST" action="{{ route('login') }}">
                    @endisset
                        @csrf
{{-- <div class="l-login__formarea"> --}}
    <div class="l-login__formarea">
                            <span for="email" class="l-login__formarea__message">email:
<span>
    @error('email')
    <span class="c-errormessage" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</span>
</span>
                            <br/>
                                <input id="" type="email" class="l-login__formarea__text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="emailを入力してください">
                                <br/>
                                {{-- email入力欄ここまで --}}
                            {{-- パスワード入力欄ここから --}}
<span for="password" class="l-login__formarea__message">パスワード:
<span>
    @error('password')
    <span class="" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </span>    
</span> 
<br/>

                                <input id="password" type="password" class="l-login__formarea__text" name="password" required autocomplete="current-password" placeholder="パスワード入力">
                                {{-- パスワード入力欄ここまで --}}
{{-- パスワードリマインダーここから --}}
<br/>
<div class="c-loginarea">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                <button type="submit" class="c-login__button">
                                    {{ __('Login') }}
                                </button>
                                <br/>
                            </div>

                                @if (Route::has(isset($authgroup) ? $authgroup.'.password.request' : 'password.request'))
                                <button class="">
                                    {{-- c-login__button --}}
                                <a href="{{ route(isset($authgroup) ? $authgroup.'.password.request' : 'password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </button>
                            @endif
                                {{-- パスワードリマインダーここまで --}}
                            </div>
                        </div>
                    </div>
                    </form>
                    <div id=app>
                        {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
                            エリアが最下部にならないように定義したもの --}}
                    <footer-component></footer-component>
                    </div>
                    @endsection
