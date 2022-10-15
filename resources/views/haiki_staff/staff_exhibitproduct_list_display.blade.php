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
        @include('rest.staff.header')
    </header>
    <h1 class="c-title">
    {{$admin->convinience_name}}所属
    {{$admin->name}}様が出品された商品一覧
</h1>

<div id="app">
    {{-- コンポーネントexhibitproductlist.vueとfooter-componenntを導出する --}}
<exhibitlist-componennt></exhibitlist-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection


