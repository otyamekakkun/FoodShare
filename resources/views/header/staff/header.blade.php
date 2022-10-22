{{--  
<div class="l-header">
    <h1 class="l-header__title">haiki share staff専用</h1>
    <nav>
        <ul>
            <li>
                <div class="l-header__nav">
                ログアウト機能を代入してやる
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="l-header__nav__button">
                <input class="" type="submit" value="ログアウト">
            </button>
              </form>
              <div>
            </li>
            <li>
            <div class="l-header__mypagebottom">
            <a href="{{route('admin-home')}}"><button>マイページ</a></button>
            <div>
            <li>
        </ul>
        --}}


<!-- HTMLコード -->
    {{-- <header class="header"> --}}
        <div class="l-header">
      <!-- ヘッダーロゴ -->
      <h1 class="l-header__title">haiki share staff専用</h1>

      <!-- ハンバーガーメニュー部分 -->
      <div class="nav">
    
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
    
        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="drawer_open"><span></span></label>
    
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_profile_display')}}">コンビニ編集画面</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}">商品を出品する</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_buyproduct_display')}}">出品した商品の一覧を見る</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}">購入された商品の一覧を見る</a></li>
          </ul>
        </nav>
    
      </div>
    </div>
    {{-- </header> --}}







        {{-- ここからheader staffmypageを作る --}}