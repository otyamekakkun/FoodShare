@extends('layouts.app2')
@section('content')
<body>
    <header>
        @include('header.staff.staff_header')
    </header>
        <div id="app">
            <div class="c-mypagemenu">
                <h1  class="c-mypagemenu__title">
                    商品編集
                </h1>
            </div>
    <div class="c-form4">
        <h1 class="c-form__title">商品の情報について記述してください</h1>
<form method="POST" action="{{ route('exhibit.update',$products->id)}}" enctype="multipart/form-data">
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
            <input  type="text" class= "c-staffform__area__textname" name="product_name" value="{{$products->product_name}}" placeholder="商品名">
<br/>
        <span class="c-staffform__title">金額を入れる:
        <span>
            @error('product_name')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br/>
</span>    
</span><br>
            <input id="" type="number" class="c-staffform__area__textprice" name="price" value="{{$products->price}}">円
    </div>
{{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
 <calender-component></calender-component>

 @error('img_path')
 <strong>{{ $message }}</strong>
@enderror
        <drag-component></drag-component>
        {{-- 登録した都道府県が自動的にデータベースに入るように設定する --}}
<button type="submit" class="c-staffform__area__submitbutton">
    商品を編集する
</button>
</form>
</div>

<form action="{{ route('drills.delete',$products->id ) }}" method="post" class="d-inline">
    @csrf
    <button class="c-staffform__area__deletebutton" onclick='return confirm("削除しますか？");'>この商品を削除する</button>
</form>
</div>
<footer-component></footer-component>
</div> 
{{-- 上のdivはコンポーネントを囲むdiv --}}

</div>
</body>
@endsection