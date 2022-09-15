<body>
    <p>
        haiki share shopper mypageへようこそ
    </p>
{{-- <a href="{{route('logout')}}">ろぐあうと</a> 
ログアウトする際はpost送信をするらしい。






--}}
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="ログアウト">
      </form>
{{-- 
    この記述の仕方だと画面は確かに遷移するがボタンを押した瞬間に画面遷移することができない
    
    --}}


<a href="{{route('haiki_shopper.shopper_profile_display')}}"><button>frf</a></button>
</body>