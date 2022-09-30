@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    コンビニ側専用で商品詳細の専用の画面をうつし出すものです
</h1>
{{-- 詳細だからできるだけ丁寧に載せる必要があり --}}
{{-- 
    このままだと商品詳細画面ではない情報は一つのみにしたいから
    購入されたらラベルをつける
    
    
    
    --}}
    
    <p>商品名:{{$products->product_name}}</p>
    <img src="{{ Storage::url($products->img_path) }}" width="25%" class=""/>
    <p>価格:{{$products->price}}</p>
    <p>賞味期限：{{$products->best_by_date}}</p>




<div id="app">
<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection