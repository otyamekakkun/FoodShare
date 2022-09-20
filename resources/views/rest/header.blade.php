<div class="l-header">
    <h1 class="l-header__title">haiki share</h1>
    <nav>
        <ul>
            <li>
                <div class="l-header__nav">
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
            <a href="{{route('haiki_shopper.shopper_mypage_display')}}"><button>マイページ</a></button>
            <div>
            <li>
        </ul>
        
    </nav>
</div>
