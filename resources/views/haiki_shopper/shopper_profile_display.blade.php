{{-- 
//=====================================================
//1.何をするファイルか？
/======================================================
(ファイル名）shopper_profile_display.blade.php
利用者のユーザー情報を編集する画面にする

//=====================================================
//2.どのような機能を含ませるか？
//=====================================================
1.mypageから遷移される
2.メールアドレスとパスワードを編集することができて編集したら、dbに登録して、mypageに戻る使用を作る。         
3.デフォルト状態でもmypageに戻る仕様とログアウト機能も含ませとく。
4.
5.

//=====================================================
//３.画面遷移先
//=====================================================
1.ログアウトボタン（ログアウトされてトップページに戻る。)
2.マイページに戻るボタン(警告で編集中の内容は保存されません。と言う表示を出してmypageに遷移させる。)
3.マイページの表示画面として、購入した商品一覧が５軒ずつ載せる。(その商品ごとに
詳細をみるボタン、購入をキャンセルするボタンがある。(詳細をみるボタンを押したら画面遷移する。)
購入をキャンセルするボタンが押したら、アラートかモーダルを表示させて商品をキャンセルする仕組みを作る。s)
4.商品を見るというボタンがあり（そこから商品一覧ページに飛ばすことができる。

//=====================================================
//4.導入したいアニメーション(主にhtml,cssのアニメーション機能)
//=====================================================
1.ボタンに触れたら色が変化する機能をつける。

//====================================================
//5.導入したい(vueの機能)
//=====================================================
1.ボタンをクリックしたらモーダルを出す機能をつけたい。（そのモーダルから、あなたは本当に
利用者ですか？スタッフですか？と言うコメントを出してモーダル上から画面遷移をさせる。
 --}}
 @extends('layouts.app2')
 @section('content')
<body>
        <header>
            @include('rest.shopper.header') 
            </header>
    <main>
    <section>
        <form method="POST" enctype="multipart/form-data" action="{{route('haiki_shopperprofile_edit',$user->id)}}">      
            @csrf
            <div class="l-formshopperprofile">
            <h3 class="l-formshopperprofile__title">{{$user->name}}様
                プロフィール編集</h3>
            <div class="l-formshopperprofile__te">
                <span class="l-formshopperprofile__message">名前:               
                    @error('name')
                    <span class="c-errormessage" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
    </span>
    <br/>
                <input class="l-formshopperprofile__text" action="post" type="text" name="name" placeholder="名前を編集" value={{$user->name}}>
                <br/>
                {{-- 名前編集ここまで --}}
                <span class="l-formshopperprofile__message">email:
                    @error('email')
                    <span class="c-errormessage" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </span>
                <br/>

            <input class="l-formshopperprofile__text" action="post" type="text" name="email" placeholder="メールアドレス編集" value={{$user->email}}>
            <br/>
    {{-- emailここまで --}}
    {{-- passwordここから --}}
<span class="l-formshopperprofile__message">パスワード編集:
    @error('password')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</span>
<br/>
    <input class="l-formshopperprofile__text" action="post" type="password" name="password"><br/>
    {{-- パスワード編集ここまで --}}
    <span class="l-formshopperprofile__message">パスワード再入力:
        @error('password_confirmation')
        <span class="c-errormessage" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </span>
    <br/>
            <input class="l-formshopperprofile__text" type="password" class="l-register__common__sentence" name="password_confirmation" required autocomplete="new-password">
            </div>
        <input type="submit" class="c-formshopperprofile__sub" value="変更する">
        </div>
        </form>
        </div>
        </section>
</main>
</body>
<div id=app>
    {{-- incompletefooter-componentはfooterをレウアウトしてくれるもの。ただしページ量が少ないときにfooter
        エリアが最下部にならないように定義したもの --}}
        <footer-component><footer-component>

</div>

@endsection