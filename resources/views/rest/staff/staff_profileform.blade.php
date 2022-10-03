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
{{-- メールアドレス編集のエラーメッセージよう --}}
            @error('email')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="password" name="password" placeholder="パスワード編集">

            @error('password')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="password" name="password2" placeholder="パスワード再入力">

            @error('password2')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="password" name="convinience_name" placeholder="コンビニ名">

            @error('convinience_name')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input class="l-formstaffprofile__text" action="post" type="password" name="convinience_branch" placeholder="支店名">

            @error('convinience_branch')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror


<select name="prefecture" class="l-formstaffprofile__text">
    <option selected>都道府県</option>
    <option value="北海道">北海道</option>
    <option value="青森県">青森県</option>
    <option value="岩手県">岩手県</option>
    <option value="宮城県">宮城県</option>
    <option value="秋田県">秋田県</option>
    <option value="山形県">山形県</option>
    <option value="福島県">福島県</option>
    <option value="茨城県">茨城県</option>
    <option value="栃木県">栃木県</option>
    <option value="群馬県">群馬県</option>
    <option value="埼玉県">埼玉県</option>
    <option value="千葉県">千葉県</option>
    <option value="東京都">東京都</option>
    <option value="神奈川県">神奈川県</option>
    <option value="新潟県">新潟県</option>
    <option value="富山県">富山県</option>
    <option value="石川県">石川県</option>
    <option value="福井県">福井県</option>
    <option value="山梨県">山梨県</option>
    <option value="長野県">長野県</option>
    <option value="岐阜県">岐阜県</option>
    <option value="静岡県">静岡県</option>
    <option value="愛知県">愛知県</option>
    <option value="三重県">三重県</option>
    <option value="滋賀県">滋賀県</option>
    <option value="京都府">京都府</option>
    <option value="大阪府">大阪府</option>
    <option value="兵庫県">兵庫県</option>
    <option value="奈良県">奈良県</option>
    <option value="和歌山県">和歌山県</option>
    <option value="鳥取県">鳥取県</option>
    <option value="島根県">島根県</option>
    <option value="岡山県">岡山県</option>
    <option value="広島県">広島県</option>
    <option value="山口県">山口県</option>
    <option value="徳島県">徳島県</option>
    <option value="香川県">香川県</option>
    <option value="愛媛県">愛媛県</option>
    <option value="高知県">高知県</option>
    <option value="福岡県">福岡県</option>
    <option value="佐賀県">佐賀県</option>
    <option value="長崎県">長崎県</option>
    <option value="熊本県">熊本県</option>
    <option value="大分県">大分県</option>
    <option value="宮崎県">宮崎県</option>
    <option value="鹿児島県">鹿児島県</option>
    <option value="沖縄県">沖縄県</option>
    </select>
    </select>
            <input class="l-formstaffprofile__text" action="post" type="password" name="adress" placeholder="住所">

            @error('adress')
<span class="" role="alert">
    <strong>{{$message}}</strong>
</span>
@enderror

            <input type="submit" class="l-formstaffprofile__sub" value="変更する">
    
        </div>
        </form>
        </div>
        </section>
        
    
    