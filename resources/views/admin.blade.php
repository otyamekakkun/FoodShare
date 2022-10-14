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
{{-- コンポーネント部分 --}}
<staffmypage-componennt></staffmypage-componennt>



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
<staffmypagebought-componennt :product_img="'{{$products}}'"></staffmypagebought-componennt>
</div>
</main>
<footer-component></footer-component>
</div>
</body>
@endsection
