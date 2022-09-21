@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    haiki share スタッフ専用ページへようこそ！！
</h1>
<a href="{{route('haiki_shopper.staff_profile_display')}}"><button>コンビニについてのプロフィール編集画面に移動する</a></button>
<a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}"><button>商品を出品する</a></button>


<a href="{{route('haiki_shopper.staff_buyproduct_display')}}"><button>購入された商品を写す</a></button>
<a href="{{route('haiki_shopper.staff_productedit_display')}}"><button>出品した商品を編集する</a></button>

<a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}"><button>購入された商品を写す</a></button>
<a href="{{route('haiki_shopper.staff_productedit_display')}}"><button>出品した商品一覧を表示</a></button>

<div class="dis">
<div class="a">
<p>自分のコンビニが出品した商品<p>
</div>


<div class="b">
<p>利用者が購入された商品一覧</p>
</div>
</div>


<div class="c">
        <button>そこの毛</button>
</div>











<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection