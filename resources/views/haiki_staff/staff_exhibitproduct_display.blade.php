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
    商品を出品する
</h1>

<div class="a">
    商品を出品する画面全体
<div class="b">
    出品したい商品を入れてください
</div>
<div class="c">
    出品したい商品を入れてください
</div>
<div class="d">
    価格 円
</div>
<div class="e">
    賞味期限 カレンダー形式で入力させる
</div>
<div class="f">
    <input action="" type="submit" value="商品を登録し直す">
</div>
{{-- 全体を括るdiv --}}
</div>



@include('item.create')





<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection