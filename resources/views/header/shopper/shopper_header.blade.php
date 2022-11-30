<div class="l-header">
  
     <h1 class="l-header__title">Haiki share</h1>
      <!-- ハンバーガーメニュー部分 -->
    
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="c-drawer__hidden" type="checkbox">
    
        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="c-drawer--open"><span></span></label>
    
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="{{route('haiki_shopper.shopper_mypage_display')}}">マイページに戻る</a></li>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <input class="l-header__nav__button" type="submit" value="ログアウト">
        </form>
          </ul>
        </nav>
</div>
    </div>
