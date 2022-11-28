{{-- 
    商品詳細画面のお客様専用で表したもの
    （概要)
    (データベースのproductsテーブルのboughtが０の時。)
    データベースのproductsテーブルのboughtを見て0なら商品が購入されていないので、画面上で商品を買う！というスイッチが表示される。
    商品を買うというボタンが押されたら、ログインしているユーザーと出品したコンビニにメールがいくようにされるのとboughtが１となり、
    購入済みというラベルが全画面に表示される。

   (データベースのproductsテーブルのboughtが１の時)
   データベースのproductsテーブルのboughtを見て０なら商品が購入されているので、画面上で商品の購入をキャンセルするという処理が表示される。
   このボタンが押された際に、boughtの値が0となり、購入される前と同じ状態になる。

   (twitterの実装について)
   今回は「この商品をシェアするというボタンが押されたら、twitter内で商品情報（名前）が記述されるようにした

   (productdetail-component)
   商品の画像、名前、賞味期限、金額、出品都道府県、購入フラグをvueのproductdetail-componentに渡して商品の詳細を表示したもの。
   コンビニ側の商品詳細と併用している。

   c-productdetail__shoppermenu
c-shopper__action
c-shopper__action__button
    --}}
@extends('layouts.app2')
@section('content')
@section('title', "商品詳細画面")
<body>
    <header>
        @include('header.shopper.shopper_header') 
        </header>
<div id="app">
    <main>
         <div class="l-productdetail"> 
        <productdetail-component :id="'{{$products->id}}'" :img="'{{$products->img_path}}'" :name="'{{$products->product_name}}'" :price="'{{$products->price}}'"
            :best_by_date="'{{$products->best_by_date}}'" :prefecture="'{{$products->prefecture}}'" :bought="'{{$products->bought}}'">
        </productdetail-component>
@if($products->bought<=0)
    <form class="" action="{{ route('bought.update',$products->id)}}" enctype="multipart/form-data" method="post">
        <div class="">    
            <button class="">
                <i class="fab fa-twitter fa-fw"></i>この商品をシェアする</button> </a>        
            <a  href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow">
        @csrf
        <button class="">商品を買う！</button>
        </div>
    </form>
@endif

@if($products->bought>=1)
<button class="">
    <a  href="https://twitter.com/intent/tweet?text=haiki share 商品名{{$products->product_name}}について自由に書いて広めよう!!" target="_blank_" rel="nofollow">
        <i class="fab fa-twitter fa-fw"></i> この商品をシェアする</a>
    </button> 
    <form class=""  action="{{route('bought.cancel',$products->id)}}" enctype="multipart/form-data" method="post">
        @csrf 
            <button class="">購入をやめる</button>
    </div>  
    </form>
@endif
</main>
</div>
<footer-component></footer-component>
</div>

</body>
@endsection



