@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('header.staff.staff_header')
    </header>
    
    <div id="app">
        <div class="l-productdetail">
            <div class="l-productdetail__area">

<productdetail-component :id="'{{$products->id}}'" :img="'{{$products->img_path}}'" :name="'{{$products->product_name}}'" :price="'{{$products->price}}'"
    :best_by_date="'{{$products->best_by_date}}'" :prefecture="'{{$products->prefecture}}'" :bought="'{{$products->bought}}'"></productdetail-component>
            </div>
        </div>

    <footer-component></footer-component>
</div>
</body>
@endsection