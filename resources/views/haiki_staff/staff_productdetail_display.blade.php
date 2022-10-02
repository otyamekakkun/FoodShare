@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1 class="c-title">
    商品詳細
</h1>
{{-- 詳細だからできるだけ丁寧に載せる必要があり --}}
{{-- 
    このままだと商品詳細画面ではない情報は一つのみにしたいから
    購入されたらラベルをつける
    --}}
    
<div class="l-staffproductdetail">
    <div class="l-staffproductdetail__area">
    <img src="{{ Storage::url($products->img_path) }}" class="c-productdetailimg"/>
    <div class="l-staffproductdetail__areaflex">
        <ul class="c-productdetaillist">
    <li class="c-under">商品名:{{$products->product_name}}</li>

    <li class="c-under">価格:{{$products->price}}</li>
    <li class="c-under">賞味期限：{{$products->best_by_date}}</li>
</ul>
</div>
    </div>
</div>

<div id="app">
<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection