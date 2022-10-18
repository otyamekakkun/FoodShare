@extends('layouts.app2')
@section('content')
<body>
    {{-- ヘッダー部分 --}}
        <header>
            @include('rest.staff.header')
        </header>
        <div id="app">
<h1 class="c-title">
    商品を出品する
</h1>
<form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data" class="m">
    @csrf
        <h1 class="l-productexhibitform__sentence">商品名</h1>
            <input  type="text" class="l-productexhibitform__typo @error('problem2') is-invalid @enderror" name="product_name" value="" placeholder="商品名">
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
        <label class="l-productexhibitform__sentence">金額を入れる</label><br>
            <input id="" type="number" class="l-productexhibitform__typo2 @error('price') is-invalid @enderror" name="price" value="">円
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
 <calender-component></calender-component>
        <drag-component></drag-component>
        @error('img_path')
            <strong>{{ $message }}</strong>
        @enderror
        {{-- 登録した都道府県が自動的にデータベースに入るように設定する --}}
<input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
{{-- 都道府県エリアここまで --}}
<button type="submit" class="btn btn-primary">
    商品を出品する
</button>
{{-- 全体を括るdiv --}}
</form>
<footer-component></footer-component>
</div>

</body>
@endsection