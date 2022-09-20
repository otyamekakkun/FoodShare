@extends('layouts.app2')
@section('content')

<body>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
        --}}
        <header>
            @include('rest.staff.header')
        </header>
    
<h1>
    商品を出品する画面
</h1>
<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection