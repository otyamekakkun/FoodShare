@extends('layouts.app2')
@section('content')
{{-- (画面における説明)
    商品を出品する画面
    データベース機能
    画面モックは今から考え直すが設計図はあるのでそれに準じる
    --}}
{{-- 
これは後は画面モックすれば完成する
    --}}


<body>
    {{-- ヘッダー部分 --}}
        <header>
            @include('rest.staff.header')
        </header>
        <div id="app">
<h1 class="c-title">
    商品を出品する
</h1>

<div class="l-exhibitproduct">
{{-- form画面ここから --}}
<div class="l-exhibitproduct__area">

<form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data" class="m">

    @csrf
    <div class="l-productexhibitform">
        <div class="l-productexhibitform">
            <div class="l-productexhibitform__flex">
                <div class="u-space"></div>
                <div class="u-space__detail">
        <h1 class="l-productexhibitform__sentence">商品名</h1>
            <input  type="text" class="l-productexhibitform__typo @error('problem2') is-invalid @enderror" name="product_name" value="" placeholder="商品名">
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
            <br/>
            <div class="l-productexhibitform__flex">
        <label class="l-productexhibitform__sentence">金額を入れる</label><br>
            <input id="" type="number" class="l-productexhibitform__typo2 @error('price') is-invalid @enderror" name="price" value="">円
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        </div>
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
<div class="l">
 <calender-component></calender-component>
</div>
</div>
</div>
    出品したい商品の画像を入れてください<br/>
    <label for="img_path" class="">写真を入れる</label>

        <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="">

        @error('img_path')
            <strong>{{ $message }}</strong>
        @enderror
        {{-- 基本的に都道府県を記述するところはフォームには出さない。ログインしている人の件名が入るように
            セッティングする --}}
<input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">


<button type="submit" class="btn btn-primary">
    商品を出品する
</button>
{{-- 全体を括るdiv --}}
</div>

</form>

</div>
<footer-component></footer-component>
</div> 
{{-- 上のdivはコンポーネントを囲むdiv --}}

</div>
</body>
@endsection