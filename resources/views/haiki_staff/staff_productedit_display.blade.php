@extends('layouts.app2')
@section('content')

<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1 class="c-title">
    コンビニ側で出品した商品の内容を編集するものです
</h1>

{{-- 
    購入済み商品は編集、削除できない
    削除フラグ入りそう。何故なら削除できないと記述されているから。
    削除フラグなら0か１か２を立てるかもう一つ用意しないと行けなさそう。

    コンビニ側出品した商品一覧という画面から遷移される。
    webカツでいうlaravelの編集画面を参考にして画面を遷移させる。おそらくid形式で表示しないと行けないと思う。
    vueの処理はいらなさそう。

    --}}
{{-- 
    これはそれぞれの商品にgetパラメータをふる
    --}}

{{-- 
    商品詳細画面
    
    --}}

    {{-- <li>商品名:{{$products->product_name}}</li> --}}


{{-- 
    画面の設計は出品画面と同じ感じにする。ドラッグおんドラッグするところはすでにできている
    
    --}}

        
        <div class="l-exhibitproduct">
        {{-- form画面ここから --}}
        <div class="l-exhibitproduct__area">
        
        <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="q">
                <label>商品名</label><br>
                    <input id="" type="text" class="form-control @error('problem2') is-invalid @enderror" name="product_name" value="">
                    @error('product_name')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br/>
                <label>金額を入れる</label><br>
                    <input id="" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="">
        
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        {{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
         <calender-component></calender-component>
            {{-- <drag-component></drag-component> --}}
        
            出品したい商品の画像を入れてください
            <label for="img_path" class="">写真を入れる</label>
        
                <input id="img_path" type="file" class="form-control @error('img_path') is-invalid @enderror" name="img_path" value="">
        
                @error('img_path')
                    <strong>{{ $message }}</strong>
                @enderror
        
        
        
        
        <button type="submit" class="btn btn-primary">
            登録し直す
        </button>
        {{-- 全体を括るdiv --}}
        </div>
        
        </form>
        
        </div>
        





    

<div id="app">
<footer-component></footer-component>
</div>
</body>
@endsection