@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-header">{{ isset($authgroup) ? ucwords($authgroup) : ""}} 
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    @isset($authgroup)
                    {{-- パスワードリマインダー --}}
                    コンビニ用パスワードリマインダー
                    <form method="POST" action="{{ route("$authgroup.password.email") }}">

                    @else
                    <form method="POST" action="{{ route('password.email') }}">
                    @endisset
                        @csrf

                        <div class="row mb-3">
                            <span for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</span>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <button type="submit" class="btn btn-primary">
                                    新たなパスワードを取得する
                                </button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
