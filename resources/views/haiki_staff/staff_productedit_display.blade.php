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
    商品を編集する
</h1>

<div class="l-exhibitproduct">
{{-- form画面ここから --}}
<div class="l-exhibitproduct__area">

<form method="POST" action="{{ route('exhibit.update',$products->id)}}" enctype="multipart/form-data">

    @csrf
    <div class="l-productexhibitform">
        <div class="l-productexhibitform">
        <h1 class="l-productexhibitform__sentence">商品名</h1><br>
            <input id="" type="text" class="l-productexhibitform__typo @error('problem2') is-invalid @enderror" name="product_name" value="">
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
        <label class="l-productexhibitform__sentence">金額を入れる</label><br>
            <input id="" type="number" class="l-productexhibitform__typo2 @error('price') is-invalid @enderror" name="price" value="">

            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
 <calender-component></calender-component>
</div>
</div>

    {{-- <drag-component></drag-component> --}}

    出品したい商品の画像を入れてください
    <label for="img_path" class="">写真を入れる</label>

        <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="">

        @error('img_path')
            <strong>{{ $message }}</strong>
        @enderror




<button type="submit" class="btn btn-primary">
    商品を出品する
</button>






{{-- 全体を括るdiv --}}
</div>

</form>

</div>


<form action="{{ route('drills.delete',$products->id ) }}" method="post" class="d-inline">
    @csrf
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>{{ __('Go Delete')  }}</button>
</form>








<footer-component></footer-component>
</div> 
{{-- 上のdivはコンポーネントを囲むdiv --}}

</div>
</body>
@endsection