@extends('layouts.app2')
@section('content')
<body>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
        --}}
{{-- 
    自分の出品した商品を取得するだけの処理。
    
    --}}
        <header>
            @include('rest.staff.header')
        </header>

<h1>
    コンビニ側が出品した商品の一覧のページです
</h1>

<main>
    <div class="l-staffmypage">
    <div class="l-staffmypage__exhibitarea">
    <h1>自分のコンビニが出品した商品</h1>
    @foreach ($products as $product)
    <img src="{{ Storage::url($product->img_path) }}" width="25%">
    <p>商品名:{{$product->product_name}}</p>
    <p>価格:{{$product->price}}</p>
    {{-- <button>詳細をみる</button> --}}
    <p>詳細をみる</p>
    <button><a href="{{route('haiki_shopper.staff_productdetail_display',$product->id)}}">商品の詳細をみる</a>

    @if($product->bought===0)
    {{-- <button>購入されていないので編集する</button> --}}
    {{-- <a href="{{route('haiki_shopper.staff_productedit_display',$product->product_id)}}">>商品を編集する<</a> --}}
    <button><a href="{{route('haiki_shopper.staff_productedit_display',$product->id)}}">商品を編集する</a>
    </button>

    @endif
    {{-- おそらく詳細を見る編集するでidをふる練習をしないと行けなさそう。 --}}
















    @endforeach
        
    {{$products->links('layouts.paginate')}}

    






    </div>
    {{-- 基本的にページネーションをここで施す --}}
    </div>
    </main>
    





<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection