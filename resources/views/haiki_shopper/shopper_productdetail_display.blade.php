<body>
<p>
    お客様　商品一覧です
</p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
  </form>
<button><a href="{{route('haiki_shopper.shopper_profile_display')}}" >商品の詳細をみる</a></button>
</body>