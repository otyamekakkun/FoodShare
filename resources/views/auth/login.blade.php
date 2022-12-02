@extends('layouts.app3')
@section('content')
@include('header.other.otherheader')
@isset($authgroup)
<h1 class="c-detail__title">スタッフログイン</h1>
<p class="c-warning">利用者は普通のログインページで記述してください</p>
<form method="POST" action="{{ url("login/$authgroup") }}">
@else
<h1 class="c-detail__title">ログイン</h1>
<form method="POST" action="{{ route('login') }}">
@endisset @csrf
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
<br/>
<div class="c-loginarea">
<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
ログイン時間を保持する
    <button type="submit" class="c-login__button">
        ログイン
    </button>
    <br/>
 </div>
 @if (Route::has(isset($authgroup) ? $authgroup.'.password.request' : 'password.request'))
<a class="c-remind__text" href="{{ route(isset($authgroup) ? $authgroup.'.password.request' : 'password.request') }}">
パスワードを忘れた方はこちらへ
</a>
@endif
     </div>
  </div>
</div>
</form>
<div id=app>
<footer-component></footer-component>
</div>
@endsection
