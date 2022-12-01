{{-- 
    コンビニ側が出品した商品を一覧にする画面。
    --}}

@extends('layouts.app2') @section('content') @section('title', "出品一覧画面")

<body>
    <header>@include('header.staff.staffmypage_header')</header>
    {{-- マイページみたいなものを導入 --}}
    <h1 class="c-detail__title">これまで出品された商品リスト</h1>
    <div id="app">
        <exhibitlist-componennt></exhibitlist-componennt>
        <footer-component></footer-component>
    </div>
</body>
@endsection

{{--基本的に displayflexで書ける＋ページネーション機能を導入しているので --}}
