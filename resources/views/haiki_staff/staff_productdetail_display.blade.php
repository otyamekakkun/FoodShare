@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1 class="c-title">
    コンビニ側専用で商品詳細の専用の画面をうつし出すものです
</h1>
{{-- 詳細だからできるだけ丁寧に載せる必要があり --}}
{{-- 
    このままだと商品詳細画面ではない情報は一つのみにしたいから
    購入されたらラベルをつける
    --}}
    
<div class="l-staffproductdetail">
    <div class="l-staffproductdetail__area">
    <img src="{{ Storage::url($products->img_path) }}" class=""/>
    <div class="l-staffproductdetail__areaflex">
        <ul class="c-productdetaillist">
    <li>商品名:{{$products->product_name}}</li>

    <li>価格:{{$products->price}}</li>
    <li>賞味期限：{{$products->best_by_date}}</li>
</ul>
</div>

    </div>


</div>















<div id="app">
<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection