@extends('layouts.app3')

@section('content')
<div class="c-form1">
    <div class="c-form__area">


                <div class="card-header">{{ isset($authgroup) ? ucwords($authgroup) : ""}} 
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    @isset($authgroup)
                    {{-- パスワードリマインダー --}}
                    {{-- <div class="c-form1"> --}}
                        {{-- <div class="c-form__area"> --}}

                    コンビニ用パスワードリマインダー
                    <form method="POST" action="{{ route("$authgroup.password.email") }}">
                    @else
                    <form method="POST" action="{{ route('password.email') }}">
                    @endisset
                        @csrf
                            <span for="email" class="c-form__area__message">{{ __('Email Address') }}:</span>
                            @error('email')
                            <span class="c-errormessage" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br/>

                                <input id="email" type="email" class="c-form__area__text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                <button type="submit" class="btn btn-primary">
                                    新たなパスワードを取得する
                                </button>
                    </form>
                </div>
</div>
@endsection
