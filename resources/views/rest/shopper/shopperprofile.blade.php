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
            
        @enderror
        <input class="l-formshopperprofile__text" action="post" type="password" name="password" placeholder="パスワード編集">
        <input class="l-formshopperprofile__text" action="post" type="passwordremind" name="password" placeholder="パスワード再入力">
        </div>
    <input type="submit" class="c-formshopperprofile__sub" value="変更する">
    </div>
    </form>
    </div>
    </section>
    


