{{-- @extends('layouts.app2') --}}

{{-- @section('content') --}}
<section>
    <form>
        @csrf
        <div class="c-formshopperprofile">
        <h3 class="c-formshopperprofile__title">お客様 プロフィール編集</h3>
        <div class="c-formshopperprofile__te">
        <input class="c-formshopperprofile__text" action="post" type="text" name="" placeholder="メールアドレス編集">
        <input class="c-formshopperprofile__text" action="post" type="password" name="" placeholder="パスワード編集">
        <input class="c-formshopperprofile__text" action="post" type="password" name="" placeholder="パスワード再入力">
        </div>
    <input type="submit" class="c-formshopperprofile__sub" value="変更する">
    </div>
    </form>
    </div>
    </section>
    


{{-- @endsection --}}