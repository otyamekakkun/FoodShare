<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class HaikiController extends Controller
{
/** 画面を表示するためのメソッド集団
 * 1(利用客)マイページ表示用
 * 2(利用客)プロフィール編集画面表示用
 * 3(利用客)商品一覧表示用
 * 4(利用客)商品詳細表示用
 * 5(コンビニ)マイページ表示用
 * 6(コンビニ)コンビニプロフィール編集表示用
 * 7(コンビニ)商品を出品する画面
 * 8(コンビニ)購入された商品一覧を表示するもの
 * 9(コンビニ)出品する商品を編集するもの
 * 10(コンビニ)出品した商品を一覧する表示
 */
    public function shopper_mypage_display(){
        return view('haiki_shopper.shopper_mypage_display');
    } //.............................................................1


// shopper_profile_displayのルーティング設定
    public function shopper_profile_display(){
        return view('haiki_shopper.shopper_profile_display');
    } //.............................................................2
public function shopper_profile_edit(Request $request)
{
$request->validate([
    //入力ネームと同じものを対応させる
    //後で詳しく設定する（今は最低限）
    'email'=>'required|min:5',
    'password'=>'required|min:6',
    'password2'=>'required|min:6|same:password',

]);
return view('haiki_shopper.shopper_mypage_display');

}
//shopper_profileの内容ここまで。
    public function shopper_productlist_display(){
        return view('haiki_shopper.shopper_productlist_display');
    } //.............................................................3

    public function shopper_productdetail_display(){
        return view('haiki_shopper.shopper_productdetail_display');
    } //.............................................................4

    public function staff_mypage_display(){
        return view('haiki_staff.staff_mypage_display');
    } //.............................................................5

//staffのprofileのdisplay
    public function staff_profile_display(){
        return view('haiki_staff.staff_profile_display');
    } 

    public function staff_profile_edit(Request $request)
{
$request->validate([
    //入力ネームと同じものを対応させる
    //後で詳しく設定する（今は最低限）
    'email'=>'required|string|min:8',
    'password'=>'required|min:6',
    'convinience_name'=>'required',
    'convinience_branch'=>'required',
    'adress'=>'required'

]);
return view('admin');

}

    
    //.............................................................6

//staffのprofileのdisplayここまで

    public function staff_exhibitproduct_display(){
        return view('haiki_staff.staff_exhibitproduct_display');
    } //.............................................................7

    public function staff_buyproduct_display(){
        return view('haiki_staff.staff_buyproduct_display');
    } //.............................................................8

    public function staff_productedit_display(){
    return view('haiki_staff.staff_productedit_display');
    } //.............................................................9

//========================================================================    
//ここから商品ホームページの一覧の流れを記述する
//========================================================================    

    public function staff_exhibitproduct_list_display(){
    return view('haiki_staff.staff_exhibitproduct_list_display');
    } 
// ここからdrillの内容をコピペする
public function create_exhibitproduct(Request $request){
    $request->validate([
//ここにバリデーションの内容を記述する

       'img_path' => 'required|file|image|mimes:png,jpeg',
       'price'=>'required',
    ]);
// モデルを使って、DBに登録する値をセット
$product = new products;
$product->fill($request->all())->save();

// 画像フォームでリクエストした画像を取得
$img = $request->file('img_path');
// 画像情報がセットされていれば、保存処理を実行
// storage > public > img配下に画像が保存される
$path = $img->store('img','public');

// DBに登録する処理 

products::create([
'product_name'=>$product->product_name,
'img_path' => $path,
'price'=>$product->price,
'best_by_date'=>$product->best_by_date,
]
);



  //  $drill->save();
//今回は画像の機能が入っているから一つ一つの実装かもしれない
// fillを使って一気にいれるか
// $fillableを使っていないと変なデータが入り込んだ場合に勝手にDBが更新されてしまうので注意！
//$drill->fill($request->all())->save();

// リダイレクトする
// その時にsessionフラッシュにメッセージを入れる
return redirect('admin')->with('flash_message', __('Registered.'));

}
//ここまで




    //商品を出品する画面のコントローラの内容
    //.............................................................10

    public function staff_productlist_display(){
        return view('haiki_staff.staff_productlist_display');
        } //.............................................................10
    //画面を表示するための処理ここまで
}
