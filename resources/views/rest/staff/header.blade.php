<div class="l-header">
    <h1 class="l-header__title">haiki share staff専用</h1>
    <nav>
        <ul>
            <li>
                <div class="l-header__nav">
                {{-- ログアウト機能を代入してやる--}}
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
        
