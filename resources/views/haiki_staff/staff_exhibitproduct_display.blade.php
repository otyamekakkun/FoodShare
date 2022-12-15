{{-- 
    商品を出品する画面
    写真と商品の名前、金額、商品の賞味期限が入力するコード
    --}}
@extends('layouts.app2')
@section('content')
@section('title', "商品出品画面")
<body>
    <header>
        @include('header.staff.staffmypage_header')
    </header>

<div id="app">
        <h1  class="c-detail__title">
            商品を出品する
        </h1>
        <div class="c-staffform__area">
            <h1 class="c-staffform__areatitle">商品の情報を記述してください</h1>
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
            <br/>
                <input  type="text" class= "c-staffform__area__textname" name="product_name" value="" placeholder="商品名">
               <br/>
            </div>
            <div class="c-staffform__area__side">
            <span class="c-staffform__title">金額:
                 @error('price')
                <span class="c-errormessage" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
</span>
<br/>
                <input type="number" class="c-staffform__area__textname" name="price" value="" placeholder="半角で金額を入力">
                <br/>
                <span>
                    <br/>
        </span>    
            </div>
    <div>
        <div class="c-staffform__area__side">
            <span class="c-staffform__title">賞味期限:     
                <span class="c-errormessage">
                @error('best_by_date')
                <strong>{{ $message }}</strong>
               @enderror
           </span>
        </span>
     <calender-component>
     </calender-component>
    </div>
</div>
{{-- 
    商品詳細画面とお客様が商品を購入された際に出品したコンビニにメールがいくように、商品が登録された瞬間に
    コンビニ情報も自動的にデータベースに保存されるように設定する。
    --}}
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