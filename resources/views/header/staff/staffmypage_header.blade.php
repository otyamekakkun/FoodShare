  <div class="l-header">
      <h1 class="l-header__title">HaikiShare Staff</h1>
        <input id="drawer_input" class="c-drawer__hidden" type="checkbox">
        <label for="drawer_input" class="c-drawer--open"><span></span></label>
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_profile_display')}}">コンビニ編集画面</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_exhibitproduct_display')}}">商品を出品する</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_buyproduct_display')}}">購入された商品リスト</a></li>
            <li class="nav_item"><a href="{{route('haiki_shopper.staff_exhibitproduct_list_display')}}">出品した商品リスト</a></li>
            <li class="nav_item"><a href="{{route('admin-home')}}">マイページに行く</a></li>
          </ul>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <input class="l-header__nav__button" type="submit" value="ログアウト">
          </form>
        </nav>
    </div>
