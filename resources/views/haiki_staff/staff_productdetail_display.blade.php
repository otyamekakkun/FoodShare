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
    
    
    
    
    --}}
    <p>商品名:{{$products->product_name}}</p>



<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection