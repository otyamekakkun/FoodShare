@extends('layouts.app3')
@section('content')
 <div class="c-form1">
 <div class="c-form__title">{{ isset($authgroup) ? ucwords($authgroup) : ""}} {{ __('Reset Password') }}</div>
                    @isset($authgroup)
                    <form method="POST" action="{{ route($authgroup.'.password.update') }}">
  @csrf
                    @else
                    <form method="POST" action="{{ route('password.update') }}">
  @csrf
                    @endisset
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="c-form__area">
                            <span for="email" class="c-form__area__message">email:</span>
                            @error('email')
                                    <span class="c-errormessage" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <br/>
                                <input id="email" type="email" class="c-form__area__text" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                             <br/>
                            <span for="password" class="c-form__area__message">{{ __('Password') }}:</span>
 @error('password')
                                    <span class="c-errormessage" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <br/>
                                <input id="password" type="password" class="c-form__area__text" name="password" required autocomplete="new-password"><br/>
                            <span for="password-confirm" class="c-form__area__message">{{ __('Confirm Password') }}</span>
<br/>
                                <input id="password-confirm" type="password" class="c-form__area__text" name="password_confirmation" required autocomplete="new-password">
                 <br/>
                                <button type="submit" class="c-register__custombutton">
                                   パスワード変更
                                </button>
                    </form>
                </div>
@endsection
