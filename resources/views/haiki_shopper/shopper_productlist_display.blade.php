 {{-- お客様の商品一覧画面を表したもの。productlist-componentで商品の絞り込み機能が記載されている --}}
 @extends('layouts.app2')
 @section('content')
 @section('title', "商品一覧画面")
 <body>
    <header>
        @include('header.shopper.shoppermypage_header') 
    </header>
        <h3 class="c-detail__title">
            Product List</h3>
        <div id="app">
<productlist-component><productlist-component>
 <footer-component></footer-component>
 </div>
 </body>
 @endsection


