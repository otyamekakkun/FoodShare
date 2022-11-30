@extends('layouts.app3')
@section('content')
@include('header.other.otherheader')
@isset($authgroup)
    {{--コンビニユーザー登録画面のフォームページにして良い--}}
    <h1 class="c-detail__title">スタッフユーザー登録</h1>
    <p class="c-warning">お客様(コンビニスタッフ関係ではない)方は,トップページのお客様ユーザー登録というボタンからお入りになって登録をしてください</p>
<form method="POST" action="{{ url("register/$authgroup") }}" class="c-form__area">
 @else
 {{-- ここからユーザー登録お客様のレイアウト --}}
 <h1 class="c-detail__title">ユーザー登録</h1>
 <div class="c-form__area">
<form method="POST" action="{{ route('register') }}" >
@csrf
                            <br/>
                            <span for="name" class="c-form__area__message">名前:
                                @error('name')
                                    <span  role="alert" class="c-errormessage">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </span>
                                <br/>
                                <input id="name" type="text" class="c-form__area__text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="名前">
                                <br/>
                            <span for="email" class="c-form__area__message ">Email:
                                @error('email')
                                <span class="c-errormessage" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </span><br/>
                                <input id="email" type="email"class="c-form__area__text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                <br/>
                            <label for="password"class="c-form__area__message">パスワード:                                
                                @error('password')
                                <span class="c-errormessage" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
                        <br/>
                                <input id="password" type="password" class="c-form__area__text"  name="password" required autocomplete="new-password" placeholder="パスワード">
                                <br/>
                            <label for="password-confirm" class="c-form__area__message ">パスワード再入力:</label><br/>
                                <input id="password-confirm" type="password" class="c-form__area__text" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード再入力">        
                    </div>                    
                            <button type="submit" class="c-register__custombutton">
                                ユーザー登録
                            </button>
                        </form>
                    </div>
                    @endisset
{{-- ここまでがお客様のユーザー登録エリア --}}
                    @isset($authgroup)
                        @csrf
                            {{-- <div class="c-form__area"> --}}
                            <h1 class="c-form__title">（個人情報エリア）</h1>
                            <br/>
                            <span for="name" class="c-form__area__message">名前:
                                @error('name')
                                    <span class="c-errormessage"  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </span>
                                <br/>
                                <input id="name" type="text" class="c-form__area__text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="名前">
                                <br/>
                            <span for="email" class="c-form__area__message ">Email:
                                @error('email')
                                <span class="c-errormessage" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </span><br/>
                                <input id="email" type="email"class="c-form__area__text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                <br/>
                            <label for="password"class="c-form__area__message">パスワード:                                
                                @error('password')
                                <span class="c-errormessage" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
                        <br/>
                                <input id="password" type="password" class="c-form__area__text"  name="password" required autocomplete="new-password" placeholder="パスワード">
                                <br/>
                            <label for="password-confirm" class="c-form__area__message ">パスワード再入力:
                            </label>
                            <br/>
 <input id="password-confirm" type="password" class="c-form__area__text" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード再入力">
<span  class="c-form__area__message ">勤めているコンビニ会社:
    @error('convinience_name')
    <span class="c-errormessage" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</span>
<br/>
<input type="text" placeholder="コンビニの会社名" name="convinience_name" class="c-form__area__text">
<br/>

<span class="c-form__area__message">支店名記入欄:
    @error('convinience_branch')
    <span class="c-errormessage" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</span><br/>
<input type="text" placeholder="支店名記入欄" name="convinience_branch" class="c-form__area__text">
<br/>

    <span class="c-form__area__message">住所(47都道府県を選択):
        @error('prefecture')
        <span class="c-errormessage" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror    
    </span>
<select name="prefecture" class="c-form__area__text ">
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
<br/>
{{-- 都道府県ここまで --}}
<span class="c-form__area__message">それ以外の住所を記述:
    @error('adress')
    <span class="c-errormessage" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror    
</span>
<br/>

<input placeholder="都道府県以外の住所を記述" name="adress" class="c-form__area__text">
<button type="submit" class="c-register__custombutton">
    ユーザー登録
</button>

</form>
{{-- </div> --}}
@endisset
<div id="app">
    <footer-component></footer-component>
    </div>
@endsection
