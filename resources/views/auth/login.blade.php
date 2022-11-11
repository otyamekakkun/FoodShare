
@extends('layouts.app3')
@section('content')
@include('header.other.otherheader')
{{-- 管理者ログインページここから --}}
                    @isset($authgroup)
                    <div class="c-form1">
                        <div class="c-warning2">
                    <p>コンビニスタッフ専用ログインページ</p>
                    <p>利用者は普通のログインページで記述してください</p>
                </div>
                    <form method="POST" action="{{ url("login/$authgroup") }}">
                    @else
                    {{-- 管理者ログインページここまで --}}
                    {{-- ここから最後までユーザー登録者用と管理者用併用のログインページ --}}
                    <div class="c-form1">
                        <h1 class="c-form__title">ログイン</h1>
                    <form method="POST" action="{{ route('login') }}">
                    @endisset
                        @csrf
    <div class="c-form__area">
                            <span for="email" class="c-form__area__message">email:
<span>
    @error('email')
    <span class="c-errormessage" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</span>
</span>
                            <br/>
                                <input id="" type="email" class="c-form__area__text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="emailを入力してください">
                                <br/>
                                {{-- email入力欄ここまで --}}
                            {{-- パスワード入力欄ここから --}}
<span for="password" class="c-form__area__message">パスワード:
<span>
    @error('password')
    <span class="" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </span>    
</span> 
<br/>

                                <input id="password" type="password" class="c-form__area__text" name="password" required autocomplete="current-password" placeholder="パスワード入力">
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
                                <a class="c-remind__text" href="{{ route(isset($authgroup) ? $authgroup.'.password.request' : 'password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            {{-- </button> --}}
                            @endif
                                {{-- パスワードリマインダーここまで --}}
                            </div>
                        </div>
                    </div>
                    </form>
                    <div id=app>
                    <footer-component></footer-component>
                    </div>
                    @endsection
