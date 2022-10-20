@extends('layouts.app2')
@section('content')
<header>
    @include('rest.staff.header')
</header>
<body>
    <h1 class="c-title">
        {{$admins->name}}様
購入された商品一覧
    </h1>

<div id="app">
    <bought-componennt></bought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection