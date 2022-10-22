<div class="l-header">

     <!-- ヘッダーロゴ -->
      <h1 class="l-header__title">haiki share </h1>

      <!-- ハンバーガーメニュー部分 -->
      <div class="nav">
    
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
    
        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="drawer_open"><span></span></label>
    
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="{{route('haiki_shopper.shopper_profile_display')}}">プロフィールを編集する</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.shopper_productlist_display')}}">商品を閲覧する</a></li>

            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="l-header__nav__button">
              <input class="" type="submit" value="ログアウト">
          </button>

          </ul>
        </nav>
      </div>
      </div>
    </div>
