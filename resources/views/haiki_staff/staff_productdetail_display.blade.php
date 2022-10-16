@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>
    <h1 class="c-title">商品No.{{$products->id}} 商品名{{$products->product_name}}の商品情報</h1>

    <div id="app">

<staff_productdetail-component :id="'{{$products->id}}'" :img="'{{$products->img_path}}'" :name="'{{$products->product_name}}'" :price="'{{$products->price}}'"
    :best_by_date="'{{$products->best_by_date}}'" :prefecture="'{{$products->prefecture}}'" :bought="'{{$products->bought}}'"></staff_productdetail-component>
<footer-component></footer-component>
</div>
</body>
@endsection