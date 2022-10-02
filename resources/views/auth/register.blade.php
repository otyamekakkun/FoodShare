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

                            <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="email" class="">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        @isset($authgroup)
                        <form method="POST" action="{{ url("register/$authgroup") }}">

                            {{-- ここまで共通のユーザー登録ページ --}}
                            {{-- ここから管理者用のユーザー登録ページ --}}

                            {{-- ユーザー登録ページのコンビニ名 --}}
    @csrf
<p>勤めているコンビニの会社</p>
<input type="text" placeholder="勤めているコンビニの会社を記述してください" name="convinience_name">

</div> 
{{-- ここまで併用のdiv --}}
{{-- ユーザー登録ページのコンビニ名ここまで --}}

{{-- ユーザー登録ページの支店名ここから --}}
<div class="">
<p>支店名記入欄</p>
<input type="text" placeholder="支店名記入欄" name="convinience_branch">
{{-- ユーザー登録ページ支店名ここまで --}}
{{-- ユーザー登録住所ここから --}}
<p>住所</p>
<input type="text" placeholder="住所記入欄" name="adress">
                            @endisset
                            {{-- ユーザー登録ここまで --}}
{{--ユーザー登録ボタン  --}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                {{--ユーザー登録ボタンここまで  --}}
                            </div>
                            
<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
        エリアが最下部にならないように定義したもの --}}
<incompletefooter-component></incompletefooter-component>
</div>
@endsection
