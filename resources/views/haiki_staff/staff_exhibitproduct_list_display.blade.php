@extends('layouts.app2')
@section('content')
<body>
        <header>
            @include('rest.staff.header')
        </header>

<h1 class="c-title">
    コンビニ側が出品した商品の一覧のページです
</h1>

<main>
    <div class="l-exhibitproductlist">
        {{-- <div class="c-productlist"> --}}

{{-- おそらくもっといい方法があると思うが --}}

            <div class="pro">
                <div class="proa">
                <div>
                    <div>
                        <div>
                            <div>
    @foreach ($products as $product)
    <div class="prob">
        <img src="{{ Storage::url($product->img_path) }}" width="25%">
        <div class="proc">
            <ul>
        <li>商品名:{{$product->product_name}}</li>
        <li>価格:{{$product->price}}</li>
    
    {{-- <button>詳細をみる</button> --}}
    <button><a href="{{route('haiki_shopper.staff_productdetail_display',$product->id)}}">商品の詳細をみる</a></button>
    @if($product->bought===0)
    {{-- <button>購入されていないので編集する</button> --}}
    {{-- <a href="{{route('haiki_shopper.staff_productedit_display',$product->product_id)}}">>商品を編集する<</a> --}}
    <button><a href="{{route('haiki_shopper.staff_productedit_display',$product->id)}}">商品を編集する</a>
    </button>
</ul>
</div>
</div>
<div class="c-under"></div>
    @endif
    {{-- おそらく詳細を見る編集するでidをふる練習をしないと行けなさそう。 --}}

    @endforeach
</div>








    {{$products->links('layouts.paginate')}}

            {{-- 全体のレイアウトを閉じるdiv --}}
</div>
</main>

<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection