{{-- 
    商品を出品する画面
    (calender-componentについて)
    商品の有効期限を決める際に現在時刻より前の日付が入力されたらだめなので、現在日付より、
    未来の時刻だけが入力されるように記述した。

    (drag-componentについて）
    今回は写真がドラッグされても、ファイルで検索されて芋どちらでも、写真情報が入れられるようにした
    --}}
@extends('layouts.app2')
@section('content')
@section('title', "商品出品画面")
<body>
    {{-- ヘッダー部分 --}}
    <header>
        @include('header.staff.staff_header')
    </header>
<div id="app">
    <div class="c-mypagemenu">
        <h1  class="c-mypagemenu__title">
            商品を出品する
        </h1>
    </div>
    {{-- <div class="c-staffform__area"> --}}

    {{-- <div class="c-form5"> --}}
        <div class="c-staffform__area">
            <h1 class="c-mypagemenu__title">出品されたい商品の情報について記述してください</h1>

            {{-- <div class="c-staffform__area__side"> --}}

    <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
        @csrf
{{-- 写真エリアを一番上に持っていく --}}
        <drag-component></drag-component>
        <span class="c-errormessage">
            @error('img_path')
            <strong>{{ $message }}</strong>
           @enderror
       </span>
{{-- 
        <div class="c-staffform__area">
                             --}}

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

            <span class="c-staffform__title ">金額:
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
    {{-- <br/> --}}
    {{-- 
     <span class="c-errormessage">
        @error('best_by_date')
        <strong>{{$message}}</strong>
        @enderror
        </span>
         --}}
</div>
{{-- 
            <drag-component></drag-component>
            <span class="c-errormessage">
                @error('img_path')
                <strong>{{ $message }}</strong>
               @enderror
           </span>
            --}}
           {{-- ここは特に修正しない --}}
           {{-- お客様が商品検索するのと商品を購入する際に、判別できるように、出品したコンビニの都道府県と
            emailが自動的にデータベースに更新されるようにする。 --}}
    <input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
    <input type="text" name="email" value="{{$admins->email}}" class="u-hidden">

    <button type="submit" class="c-staffform__area__submitbutton">
        商品を出品する
    </button>
    {{-- </div> --}}
    </form>
</div>

    <footer-component></footer-component>
    </div>

{{-- <footer-component></footer-component> --}}
</div>

</body>
@endsection