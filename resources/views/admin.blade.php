@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>
<div class="l-staffmypage">
<h1 class="l-staffmypage__title">
 {{$admin->convinience_name}}所属
 {{$admin->name}}様専用ページ
</h1>
<div class="l-staffmypage__menu">
<p>メニュー</p>
<a href="{{route('haiki_shopper.staff_profile_display')}}"><button>コンビニプロフィール編集画面</a></button>
<a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}"><button>商品を出品する</a></button>
    <a href="{{route('haiki_shopper.staff_buyproduct_display')}}"><button>購入された商品を全権表示</a></button>
<button><a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}"><button>出品した商品一覧を表示</a></button>
</div>
</div>
<div id="app">
{{-- コンポーネント部分 --}}
<staffmypage-componennt></staffmypage-componennt>
<staffmypagebought-componennt></staffmypagebought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection
