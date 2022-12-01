 {{-- お客様のプロフィール編集画面を表示したもの --}}
 @extends('layouts.app2')
 @section('content')
 @section('title', "プロフィール編集画面")
<body>
    <header>
        @include('header.shopper.shoppermypage_header') 
        </header>
    <main>
        <form method="POST" enctype="multipart/form-data" action="{{route('haiki_shopperprofile_edit',$user->id)}}">      
            <h3 class="c-detail__title">
                プロフィール編集</h3>
            <div class="c-form__area">
            @csrf
                <span class="c-form__area__message">名前:               
                    @error('name')
                    <span class="c-errormessage" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
    </span>
    <br/>
                <input class="c-form__area__text" action="post" type="text" name="name" placeholder="名前を編集" value={{$user->name}}>
                <br/>
                {{-- 名前編集ここまで --}}
                <span class="c-form__area__message">email:
                    @error('email')
                    <span class="c-errormessage" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </span>
                <br/>
            <input class="c-form__area__text" action="post" type="text" name="email" placeholder="メールアドレス編集" value={{$user->email}}>
            <br/>
    {{-- emailここまで --}}
    {{-- passwordここから --}}
<span class="c-form__area__message">パスワード編集:
    @error('password')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</span>
<br/>
    <input class="c-form__area__text" action="post" type="password" name="password"><br/>
    {{-- パスワード編集ここまで --}}
    <span class="c-form__area__message">パスワード再入力:
        @error('password_confirmation')
        <span class="c-errormessage" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </span>
    <br/>
            <input class="c-form__area__text" type="password" name="password_confirmation" required autocomplete="new-password">
            <br/>
        <input type="submit" class="c-register__custombutton" value="変更する">
        </div>
        </form>
    </div>
        </div>
</main>
</body>
<div id=app>
        <footer-component><footer-component>
</div>

@endsection