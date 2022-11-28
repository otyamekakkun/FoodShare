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
    <h1 class="c-mypagemenu__title">
    {{-- {{$admin->name}}様が出品された商品一覧 --}}
    List of exhibited products
</h1>
    
<div id="app">
    {{-- コンポーネントexhibitproductlist.vueとfooter-componenntを導出する --}}
<exhibitlist-componennt></exhibitlist-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection

{{--基本的に displayflexで書ける＋ページネーション機能を導入しているので --}}
