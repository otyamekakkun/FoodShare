@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    コンビニ側で出品した商品の内容を編集するものです
</h1>

{{-- 
    購入済み商品は編集、削除できない
    削除フラグ入りそう。何故なら削除できないと記述されているから。
    削除フラグなら0か１か２を立てるかもう一つ用意しないと行けなさそう。

    コンビニ側出品した商品一覧という画面から遷移される。
    webカツでいうlaravelの編集画面を参考にして画面を遷移させる。おそらくid形式で表示しないと行けないと思う。
    vueの処理はいらなさそう。

    --}}
{{-- 
    これはそれぞれの商品にgetパラメータをふる
    --}}

{{-- 
    商品詳細画面
    
    --}}

    {{-- <li>商品名:{{$products->product_name}}</li> --}}


{{-- 
    画面の設計は出品画面と同じ感じにする。ドラッグおんドラッグするところはすでにできている
    
    --}}







    

<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection