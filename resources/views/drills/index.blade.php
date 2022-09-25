@extends('layouts.app')
@section('content')

<div class="container">
    <h2>{{ __('Drill List') }}</h2>
    <div class="row">
{{-- $drillsを$drillの名前に置き換える --}}
        @foreach ($drills as $drill)

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $drill->title }}</h3>
                    <h3 class="card-title">{{ $drill->category_name }}</h3>
                     {{-- <h3 class="card-title">{{ $drill->img_path }}</h3>  --}}
                     <img src="{{ Storage::url($drill->img_path) }}" width="25%">

                    <h3 class="card-title">{{ $drill->place }}</h3>
                    <h3 class="card-title">{{ $drill->best_by_date }}</h3>



                    <a href="#" class="btn btn-primary">{{ __('Go Practice')  }}</a>
                </div>
            </div>
        </div>
{{-- 実験１はとりあえずデータを出してみる --}}
{{-- 実験１は終了 --}}
        @endforeach

    </div>
</div>

@endsection