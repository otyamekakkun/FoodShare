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

                <div class="">{{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Login') }}</div>
{{-- 管理者ログインページここから --}}
                    @isset($authgroup)
                    <p>コンビニスタッフログインページ</p>
                    <p>利用者は普通のログインページで記述してください</p>
                    <form method="POST" action="{{ url("login/$authgroup") }}">
                    @else
                    {{-- 管理者ログインページここまで --}}
                    {{-- ここから最後までユーザー登録者用と管理者用併用のログインページ --}}
                    <form method="POST" action="{{ route('login') }}">
                    @endisset
                        @csrf
                        <div class="l-login">

                            {{-- <label for="email" class="">{{ __('Email Address') }}</label> --}}
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="emailを入力してください">

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- email入力欄ここまで --}}
                            {{-- パスワード入力欄ここから --}}


                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワード入力">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- パスワード入力欄ここまで --}}
{{-- パスワードリマインダーここから --}}
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                <button type="submit" class="">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                {{-- パスワードリマインダーここまで --}}
                    </form>
                </div>
                    <div id=app>
                        {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
                            エリアが最下部にならないように定義したもの --}}
                    <incompletefooter-component></incompletefooter-component>
                    </div>
                    @endsection
