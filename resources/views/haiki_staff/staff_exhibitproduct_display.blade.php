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
<div class="c-staffform">
    <h1>出品されたい商品の情報について記述してください</h1>
<form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
    @csrf
    <div class="c-staffform__area">
        <span class="l-productexhibitform__sentence">商品名:
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
        </span>
            <input  type="text" class= "" name="product_name" value="" placeholder="商品名">
<br/>
        <label class="">金額を入れる:
        <span>
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
</span>    
        </label><br>
            <input id="" type="number" class=" @error('price') is-invalid @enderror" name="price" value="">円
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
 <calender-component></calender-component>
        <drag-component></drag-component>
        @error('img_path')
            <strong>{{ $message }}</strong>
        @enderror
        {{-- 登録した都道府県が自動的にデータベースに入るように設定する --}}
<input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
{{-- 都道府県エリアここまで --}}
<button type="submit" class="">
    商品を出品する
</button>
</div>
</form>
</div>
<footer-component></footer-component>
</div>

</body>
@endsection