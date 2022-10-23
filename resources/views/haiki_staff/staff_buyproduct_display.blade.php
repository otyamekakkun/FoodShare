@extends('layouts.app2')
@section('content')
<header>
    @include('header.staff.staff_header')
</header>
<body>
    <div class="c-mypagemenu">

    <h1 class="c-mypagemenu__title">
購入された商品一覧
    </h1>
    </div>

<div id="app">
    <bought-componennt></bought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection