@extends('layouts.app2')
@section('content')
<body>
    {{-- ヘッダー部分 --}}
    <header>
        @include('header.staff.staff_header')
    </header>
{{-- @include('common.productcreate'); --}}
<div id="app">
    <div class="c-mypagemenu">
        <h1  class="c-mypagemenu__title">
            商品を出品する
        </h1>
    </div>
    <div class="c-form4">
        <h1 class="c-form__title">出品されたい商品の情報について記述してください</h1>
    <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
        @csrf
        <div class="c-staffform__area">
            <div class="c-staffform__area__side">
            <span class="c-staffform__title">商品名:
                @error('product_name')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br/>
            </span>
                <input  type="text" class= "c-staffform__area__textname" name="product_name" value="" placeholder="商品名">
    <br/>
            <span class="c-staffform__title ">金額:
            <span>
                @error('product_name')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br/>
    </span>    
</span><br>
                <input  type="number" class="c-staffform__area__textprice" name="price" value="" placeholder="金額を入力">

            </div>
    {{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}

     <calender-component></calender-component>
     @error('img_path')
     <strong>{{ $message }}</strong>
    @enderror
            <drag-component></drag-component>
            {{-- 登録した都道府県が自動的にデータベースに入るように設定する --}}
    <input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
    {{-- 都道府県エリアここまで --}}
    <button type="submit" class="c-staffform__area__submitbutton">
        商品を出品する
    </button>
    </div>
    </form>
    </div>
    

<footer-component></footer-component>
</div>
</body>
@endsection