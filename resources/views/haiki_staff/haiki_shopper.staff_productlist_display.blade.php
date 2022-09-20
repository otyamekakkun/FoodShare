@extends('layouts.app2')
@section('content')

<body>
<header>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
        --}}
        <header>
            @include('rest.staff.header')
        </header>
    
<h1>
    コンビニ側でも商品一覧を写す機能を作ります
</h1>
<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection