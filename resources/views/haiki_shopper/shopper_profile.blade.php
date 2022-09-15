<body>
    <p>
        利用客のプロフィール編集ページです
    </p>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="ログアウト">
      </form>


</body>

