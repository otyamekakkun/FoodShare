@extends('layouts.app2')
@section('content')

<body>
    {{-- 
        １ヘッダー部分の場所取り
        ２ haiki shareの場所取り、fontsize 配色
        ３ nav要素の場所取り, botanみたいな形にしたい。（切り抜いて配色みたいな感じ） fontsize 配色
        
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
    <button><a href="{{route('haiki_shopper.staff_productedit_display')}}"><button>出品した商品一覧を表示</a></button>
    </div>
    {{-- 基本的にページネーションをここで施す --}}
    <div class="l-staffmypage__side">
    <p>メニュー</p>
    <a href="{{route('haiki_shopper.staff_profile_display')}}"><button>コンビニプロフィール編集画面</a></button>
    <a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}"><button>商品を出品する</a></button>
    </div>
    </div>
    
    
    
    </main>
    
    






<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection