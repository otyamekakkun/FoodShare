@extends('layouts.app3')

@section('content')
<div class="c-form3">
    <div class="c-form__area">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    @isset($authgroup)
                <p class="c-title">  コンビニ用パスワードリマインダー</p>  
                    <form method="POST" action="{{ route("$authgroup.password.email") }}">
                    @else
                    <form method="POST" action="{{ route('password.email') }}">
                    @endisset
                        @csrf
                            <span for="email" class="c-form__area__message">{{ __('Email Address') }}を入力してください</span>
                            @error('email')
                            <span class="c-errormessage" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br/>
                                <input id="email" type="email" class="c-form__area__text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <button type="submit" class="c-remind__button ">
                                    新たなパスワードを取得する
                                </button>
                    </form>
                </div>
</div>
@endsection
