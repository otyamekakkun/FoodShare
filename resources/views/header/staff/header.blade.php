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
            <li class="nav_item"><a href="">TOP</a></li>
            <li class="nav_item"><a href="">ABOUT</a></li>
            <li class="nav_item"><a href="">SERVICE</a></li>
          </ul>
        </nav>
    
      </div>
    </div>
    {{-- </header> --}}







        {{-- ここからheader staffmypageを作る --}}