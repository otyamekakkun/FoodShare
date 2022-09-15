<body>
    <p>
        haiki share shopper mypageへようこそ
    </p>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="ログアウト">
      </form>

</body>