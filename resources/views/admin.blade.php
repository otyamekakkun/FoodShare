 
@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理者 {{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as 管理者!forjpofjropj



                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="l-header__nav__button">
                        <input class="" type="submit" value="ログアウト">
                    </button>
                      </form>
        






                </div>
            </div>
        </div>
    </div>
</div>
@endsection


