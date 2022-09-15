<body>
<p>
    お客様　商品一覧です
</p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="ログアウト">
  </form>
  </body>