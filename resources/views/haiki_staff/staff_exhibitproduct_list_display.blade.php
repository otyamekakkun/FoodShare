{{-- 
    コンビニ側が出品した商品を一覧にする画面。
    実装したこと。
    出品した商品を最新順に1ページ１０個ずつ画面に載せる処理を行なった。
    vue(axios)を用いてデータベースの情報を取得した。
    exhibitproductlist.vueと連携している。
    --}}

@extends('layouts.app2')
@section('content')
<body>
    <header>
        @include('header.staff.staff_header')
    </header>

    {{-- マイページみたいなものを導入 --}}
    <div class="c-mypagemenu">

    <h1 class="c-mypagemenu__title">
    {{$admin->convinience_name}}所属
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


