{{-- 
    header部分　保守性が高くなるように修正する箇所を１箇所にまとめた。
    --}}
<section>
    <form method="POST" action="{{route('haiki_shopperprofile_edit')}}">
        
        @csrf
        <div class="l-formshopperprofile">
        <h3 class="l-formshopperprofile__title">お客様 プロフィール編集</h3>
        <div class="l-formshopperprofile__te">
        <input class="l-formshopperprofile__text" action="post" type="text" name="email" placeholder="メールアドレス編集">

@error('email')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

<input class="l-formshopperprofile__text" action="post" type="password" name="password" placeholder="パスワード編集">
@error('password')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

        <input class="l-formshopperprofile__text" action="post" type="password" name="password2" placeholder="パスワード再入力">
        @error('password2')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

        </div>
    <input type="submit" class="c-formshopperprofile__sub" value="変更する">
    </div>
    </form>
    </div>
    </section>
    


