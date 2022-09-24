{{-- 
    header部分　保守性が高くなるように修正する箇所を１箇所にまとめた。
    restファイル コンビニ側のプロフィール編集画面おフォームページ
    --}}
    <section>
        <form class="l-form" action="{{route('haiki_staffprofile_edit')}}" method="POST">
            @csrf
            <div class="l-formstaffprofile">
            <h3 class="l-formstaffprofile__title">コンビニ情報編集画面</h3>
            <div class="l-formstaffprofile__te">
            <input class="l-formstaffprofile__text" action="post" type="text" name="email" placeholder="メールアドレス編集">
            <input class="l-formstaffprofile__text" action="post" type="password" name="password" placeholder="パスワード編集">
            <input class="l-formstaffprofile__text" action="post" type="password" name="password" placeholder="パスワード再入力">
            <input class="l-formstaffprofile__text" action="post" type="password" name="convinience_name" placeholder="コンビニ名">
            <input class="l-formstaffprofile__text" action="post" type="password" name="convinience_branch" placeholder="支店名">
            <input class="l-formstaffprofile__text" action="post" type="password" name="adress" placeholder="住所">
            <input type="submit" class="l-formstaffprofile__sub" value="変更する">
    
        </div>
        </form>
        </div>
        </section>
        
    
    