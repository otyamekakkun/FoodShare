{{-- 
    商品を出品する画面
    --}}
@extends('layouts.app2')
@section('content')
@section('title', "商品出品画面")
<body>
    <header>
        @include('header.staff.staff_header')
    </header>
<div id="app">
    {{-- <div class="c-mypagemenu"> --}}
        <h1  class="c-detail__title">
            商品を出品する
        </h1>
    {{-- </div> --}}
        <div class="c-staffform__area">
            <h1 class="c-staffform__areatitle">出品されたい商品の情報について記述してください</h1>
    <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
        @csrf
        <drag-component></drag-component>
        <span class="c-errormessage">
            @error('img_path')
            <strong>{{ $message }}</strong>
           @enderror
       </span>
            <div class="c-staffform__area__side">
            <span class="c-staffform__title">商品名:
                @error('product_name')
                <span class="c-errormessage" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </span>
                <input  type="text" class= "c-staffform__area__textname" name="product_name" value="" placeholder="商品名">
            </div>
            <div class="c-staffform__area__side">
            <span class="c-staffform__title">金額:
            <span>
                @error('product_name')
                <span class="c-errormessage" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br/>
    </span>    
</span><br>
                <input type="number" class="c-staffform__area__textname" name="price" value="" placeholder="半角で金額を入力">
            </div>
    {{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
    <div >
     <calender-component></calender-component>
</div>
    <input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
    <input type="text" name="email" value="{{$admins->email}}" class="u-hidden">
    <input type="text" name="convinience_name" value="{{$admins->convinience_name}}" class="u-hidden">
    <button type="submit" class="c-staffform__area__submitbutton">
        商品を出品する
    </button>
    </form>
</div>

    <footer-component></footer-component>
    </div>

</div>

</body>
@endsection