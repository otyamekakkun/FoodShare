@extends('layouts.app')

@section('content')
                {{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Register') }}
                @include('rest.other.otherheader')
                <p> お客様ユーザー登録ページ</p>
                    @isset($authgroup)
                    <form method="POST" action="{{ url("register/$authgroup") }}">
<h1>コンビニスタッフユーザー登録</h1>
 @else
                    <form method="POST" action="{{ route('register') }}">
                    @endisset
                        @csrf
                            <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

{{-- ここから管理者用のユーザー登録ページ --}}
                        @isset($authgroup)
                        <form method="POST" action="{{ url("register/$authgroup") }}">
    @csrf
<p>勤めているコンビニの会社</p>
<input type="text" placeholder="勤めているコンビニの会社を記述してください">

<p>支店名記入欄</p>
<input type="text" placeholder="支店名記入欄">

<p>住所</p>
<input type="text" placeholder="住所記入欄">
                            @endisset

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
        エリアが最下部にならないように定義したもの --}}
<incompletefooter-component></incompletefooter-component>
</div>
@endsection
