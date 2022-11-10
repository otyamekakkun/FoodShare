 @extends('layouts.app2')
 @section('content')
 @section('title', "商品一覧画面")

 
 <body>
    <header>
        @include('header.shopper.shopper_header') 
        </header>

        <div id="app">
<productlist-component><productlist-component>
 <footer-component></footer-component>
 </div>
 </body>
 @endsection


