@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>
    <div id="app">


{{-- 詳細だからできるだけ丁寧に載せる必要があり --}}
{{-- 
    このままだと商品詳細画面ではない情報は一つのみにしたいから
    購入されたらラベルをつける
    --}}
    
<staff_productdetail-component :test="'{{$products->img_path}}'" :name="'{{$products->product_name}}'"></staff_productdetail-component>

<incompletefooter-component></incompletefooter-component>
</div>
</body>
@endsection