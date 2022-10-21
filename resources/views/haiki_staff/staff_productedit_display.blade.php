@extends('layouts.app2')
@section('content')
<body>
        <header>
            @include('rest.staff.header')
        </header>













        <div id="app">

<h1>
    商品を編集する
</h1>

<div class="l-exhibitproduct">
<div class="l-exhibitproduct__area">
<form method="POST" action="{{ route('exhibit.update',$products->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="l-productexhibitform">
        <div class="l-productexhibitform">
        <h1 class="l-productexhibitform__sentence">商品名</h1><br>
            <input id="" type="text" class="l-productexhibitform__typo @error('problem2') is-invalid @enderror" name="product_name" value="{{$products->product_name}}">
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
        <label class="l-productexhibitform__sentence">金額を入れる</label><br>
            <input id="" type="number" class="l-productexhibitform__typo2 @error('price') is-invalid @enderror" name="price" value="{{$products->price}}">
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
 <calender-component></calender-component>
</div>
</div>
    出品したい商品の画像を入れてください
    <label for="img_path" class="">写真を入れる</label>
        <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="{{$products->img_path}}">
        @error('img_path')
            <strong>{{ $message }}</strong>
        @enderror
<button type="submit" class="btn btn-primary">
商品を編集する
</button>
</div>
</form>
</div>
<form action="{{ route('drills.delete',$products->id ) }}" method="post" class="d-inline">
    @csrf
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>{{ __('Go Delete')  }}</button>
</form>

<button><a href={{route('admin-home')}}>編集の内容を破棄して戻る</a></button>
<drag-component></drag-component>
<footer-component></footer-component>
</div> 
{{-- 上のdivはコンポーネントを囲むdiv --}}

</div>
</body>
@endsection