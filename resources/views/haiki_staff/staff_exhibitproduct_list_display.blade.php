{{-- 
    コンビニ側が出品した商品を一覧にする画面。
    --}}

@extends('layouts.app2')
@section('content')
@section('title', "出品一覧画面")

<body>
    <header>
        @include('header.staff.staff_header')
    </header>
    {{-- マイページみたいなものを導入 --}}
    <div class="c-mypagemenu">

    <h1 class="c-mypagemenu__title">
    {{$admin->name}}様が出品された商品一覧
</h1>
    </div>
<div id="app">
    {{-- コンポーネントexhibitproductlist.vueとfooter-componenntを導出する --}}
<exhibitlist-componennt></exhibitlist-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection


