@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    出品した商品一覧
</h1>
<div id="app">


<main>
<div class="l-staffmypage">
<div class="l-staffmypage__exhibitarea">
<admin-component></admin-component>

@foreach ($products as $product)
<ul>
<p>商品名:{{$product->product_name}}</p>
<p>価格:{{$product->price}}</p>
{{-- <button>詳細をみる</button> --}}
<button><a href="{{route('haiki_shopper.staff_productdetail_display',$product->id)}}">商品の詳細をみる</a>

@if($product->bought===0)
{{-- <button>購入されていないので編集する</button> --}}
{{-- <a href="{{route('haiki_shopper.staff_productedit_display',$product->product_id)}}">>商品を編集する<</a> --}}
<button><a href="{{route('haiki_shopper.staff_productedit_display',$product->id)}}">商品を編集する</a>
</button>
</ul>
@endif
{{-- おそらく詳細を見る編集するでidをふる練習をしないと行けなさそう。 --}}


@endforeach

</div>

</div>
</main>

<footer-component></footer-component>
</div>
</body>
@endsection


