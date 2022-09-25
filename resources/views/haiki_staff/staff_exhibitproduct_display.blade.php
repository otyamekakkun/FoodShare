@extends('layouts.app2')
@section('content')

<body>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
        --}}
        <header>
            @include('rest.staff.header')
        </header>
    
<h1>
    商品を出品する
</h1>

<div class="a">
    商品を出品する画面全体
<div class="b">
    出品したい商品を入れてください
</div>
<div class="c">
    出品したい商品を入れてください
</div>
<div class="d">
    価格 円
</div>
<div class="e">
    賞味期限 カレンダー形式で入力させる
</div>
<div class="f">
    <input action="" type="submit" value="商品を登録し直す">
</div>
{{-- 全体を括るdiv --}}
</div>

{{-- 
    formのname属性はレコード名と同じ（マイグレーションと同じにすると楽に処理ができる
    
    
    --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Drill Register') }}</div>

                    <div class="card-body">

{{--  --}}
                        <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group row">
                                <label for="problem2" class="col-md-4 col-form-label text-md-right">商品名</label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text" class="form-control @error('problem2') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" autocomplete="problem0" autofocus>

                                    @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="img_path" class="col-md-4 col-form-label text-md-right">写真を入れる</label>

                                <div class="col-md-6">
                                    <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="{{ old('problem2') }}" autocomplete="problem0" autofocus>

                                    @error('img_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">金額を入れる</label>

                                <div class="col-md-6">
                                    <input id="img_path" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('problem2') }}" autocomplete="problem0" autofocus>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="best_by_date" class="col-md-4 col-form-label text-md-right">賞味期限を入れる</label>

                                <div class="col-md-6">
                                    <input id="best_by_date" type="date" class="form-control @error('best_by_date') is-invalid @enderror" name="best_by_date" value="{{ old('best_by_date') }}" autocomplete="problem0" autofocus>

                                    @error('img_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        商品を出品する
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{-- 実験的な要素をここで絡めとく --}}







<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection