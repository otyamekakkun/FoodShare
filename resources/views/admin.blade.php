@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    haiki share スタッフ専用ページへようこそ！！
</h1>
<div id="app">


<main>
<div class="l-staffmypage">
<div class="l-staffmypage__exhibitarea">
<button><a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}"><button>出品した商品一覧を表示</a></button>
<admin-component></admin-component>



</div>

<div class="l-staffmypage__side">
<p>メニュー</p>
<a href="{{route('haiki_shopper.staff_profile_display')}}"><button>コンビニプロフィール編集画面</a></button>
<a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}"><button>商品を出品する</a></button>
</div>
</div>

<div class="l-staffmypage__bought">
        <h1>ご購入された商品一覧</h1>
        <a href="{{route('haiki_shopper.staff_buyproduct_display')}}"><button>購入された商品を全権表示</a></button>

</div>


</main>


{{-- <button>詳細をみる</button> --}}

{{-- <button>購入されていないので編集する</button> --}}
{{-- <a href="{{route('haiki_shopper.staff_productedit_display',$product->product_id)}}">>商品を編集する<</a> --}}




<footer-component></footer-component>
</div>
</body>
@endsection


{{-- 
@foreach ($products as $product)
<ul>
<p>商品名:{{$product->product_name}}</p>
<p>価格:{{$product->price}}</p>
<button><a href="{{route('haiki_shopper.staff_productdetail_display',$product->id)}}">商品の詳細をみる</a>
@if($product->bought===0)
<button><a href="{{route('haiki_shopper.staff_productedit_display',$product->id)}}">商品を編集する</a>
</button>
</ul>
@endif
@endforeach
 --}}