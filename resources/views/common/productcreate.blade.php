<div id="app">
    <h1 class="c-title">
        商品を出品する
    </h1>
    <div class="c-staffform">
        <h1 class="c-title">出品されたい商品の情報について記述してください</h1>
    <form method="POST" action="{{ route('create.exhibit') }}" enctype="multipart/form-data">
        @csrf
        <div class="c-staffform__area">
            <label class="">商品名:
                @error('product_name')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br/>
            </label>
                <input  type="text" class= "c-staffform__area__textname" name="product_name" value="" placeholder="商品名">
    <br/>
            <label class="">金額を入れる:
            <span>
                @error('product_name')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br/>
    </span>    
            </label><br>
                <input id="" type="number" class="c-staffform__area__textprice" name="price" value="">円
    {{-- 賞味期限の入力はjsを使用。デフォルトだと現在日時より前の日付も記入できるから --}}
     <calender-component></calender-component>
    
     @error('img_path')
     <strong>{{ $message }}</strong>
    @enderror
            <drag-component></drag-component>
            {{-- 登録した都道府県が自動的にデータベースに入るように設定する --}}
    <input type="text" name="prefecture" value="{{$admins->prefecture}}" class="u-hidden">
    {{-- 都道府県エリアここまで --}}
    <button type="submit" class="c-staffform__area__submitbutton">
        商品を出品する
    </button>
    </div>
    </form>
    </div>
    