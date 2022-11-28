{{--
     購入された商品一覧を表示するための画面
     bought-componentで購入された商品一覧が記載される
     --}}
@extends('layouts.app2')
@section('content')
@section('title', "購入された商品一覧")
<header>
    @include('header.staff.staff_header')
</header>
<body>
    <h1 class="c-detail__title">
Bought List
    </h1>

<div id="app">
    <bought-componennt></bought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection