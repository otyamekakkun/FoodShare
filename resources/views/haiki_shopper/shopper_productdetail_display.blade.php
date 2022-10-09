
@extends('layouts.app2')
@section('content')
<body>
        <header>
            @include('rest.shopper.header') 
            </header>
<h1>商品の詳細情報です</h1>
<div class="l-productdetail">
    ここで全体図をつける
<div class="l-productdetail__area">
<div class="l-productdetail__area__photo">
    ここで写真を入れる欄を作ろうかな
</div>

<div class="l-productdetail__area__menu">
    ここでメニューバー見たいな感じをつけようかな
    <button>購入する</button>
    <button>購入をキャンセルする</button>
   <button>
    <a class="btn_tw" href="https://twitter.com/intent/tweet?text=ここを記述するとtwitter内ですでに文が打ち込まれる;" target="_blank_" rel="nofollow"><i class="fab fa-twitter fa-fw"></i> この商品をシェアする</a>

   </button> 

</div>
</div>
</div>  
{{-- 全体を決めるもの --}}
<div id="app">

    <shopperproductdetail-component></shopperproductdetail-component>
<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection



{{-- 
    1.写真はvueで読み込む。
    2.基本的に商品を編集するみたいな容量で記述する。ただしそれよりすごい簡易的で購入フラグと今ログインしているユーザーフラグを
    更新すれば良い。
    3.購入後はマイページに遷移する。
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    --}}