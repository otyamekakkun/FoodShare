@extends('layouts.app2')
@section('content')
{{-- (画面における説明)
    商品を出品する画面
    データベース機能
    画面モックは今から考え直すが設計図はあるのでそれに準じる
    --}}

<body>
    {{-- ヘッダー部分 --}}
        <header>
            @include('rest.staff.header')
        </header>
<h1>
    商品を出品する
</h1>
{{-- form画面ここから --}}
<form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
    @csrf
        出品したい商品の画像を入れてください
            <label for="img_path" class="">写真を入れる</label>
    
                <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="{{ old('problem2') }}" autocomplete="problem0" autofocus>
    
                @error('img_path')
                    <strong>{{ $message }}</strong>
                @enderror
    
    {{--  --}}
<h1>出品したい商品の名前を入れてください</h1>    
        <label for="problem2" class="">商品名</label>

            <input id="" type="text" class="form-control @error('problem2') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" autocomplete="problem0" autofocus>

            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <label for="price" class="">金額を入れる</label>

            <input id="" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('problem2') }}" autocomplete="problem0" autofocus>

            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <label for="best_by_date" class="">賞味期限を入れる</label>

            <input id="best_by_date" type="date" class=" @error('best_by_date') is-invalid @enderror" name="best_by_date" value="{{ old('best_by_date') }}" autocomplete="problem0" autofocus>

            @error('img_path')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


<button type="submit" class="btn btn-primary">
    商品を出品する
</button>
{{-- 全体を括るdiv --}}

{{-- 
    formのname属性はレコード名と同じ（マイグレーションと同じにすると楽に処理ができる
    
    
    --}}
                        </form>
<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection