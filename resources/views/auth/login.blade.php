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

@extends('layouts.app')

@section('content')
@include('rest.other.otherheader')

                <div class="card-header">{{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Login') }}</div>

                <div class="">
                    @isset($authgroup)
                    <p>コンビニスタッフログインページ</p>
                    <p>利用者は普通のログインページで記述してください</p>
                    <form method="POST" action="{{ url("login/$authgroup") }}">
                    @else
                    <form method="POST" action="{{ route('login') }}">
                    @endisset
                        @csrf
                        
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
                    <div id=app>
                        {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
                            エリアが最下部にならないように定義したもの --}}
                    <incompletefooter-component></incompletefooter-component>
                    </div>
                    @endsection
