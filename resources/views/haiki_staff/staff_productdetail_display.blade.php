@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>
    <div id="app">

<staff_productdetail-component :test="'{{$products->img_path}}'" :name="'{{$products->product_name}}'" :price="'{{$products->price}}'"
    :best_by_date="'{{$products->best_by_date}}'"></staff_productdetail-component>
<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection