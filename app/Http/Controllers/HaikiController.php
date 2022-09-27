<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class HaikiController extends Controller
{
/** それぞれのページの概要。
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

 //.................................................................1shoepper_mypage
 //画面表示
    public function shopper_mypage_display(){
        return view('haiki_shopper.shopper_mypage_display');
    } 
    //自分が購入したものを最新5件で表示する。
    //.............................................................1終了


//....................................................................2shopper_profile_display
//画面表示
    public function shopper_profile_display(){
        return view('haiki_shopper.shopper_profile_display');
    } 
//.....................................................................2終了
//....................................................................3.shopper_profile_edit
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
//......................................................................3終了


    public function shopper_productlist_display(){
        return view('haiki_shopper.shopper_productlist_display');
    } //.............................................................3

    public function shopper_productdetail_display(){
        return view('haiki_shopper.shopper_productdetail_display');
    } //.............................................................4
//===========================================================
//staff_mypage_display
//===========================================================
    public function staff_mypage_display(){
        return view('haiki_staff.staff_mypage_display');
    } 
    //ページネーションを実装する
    
    
    
    
    //.............................................................5
//..................................................................9staff_profile_display
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

//====================================================================
//(create_exhibitproductで商品を出品する画面を作る)  12
//====================================================================

public function create_exhibitproduct(Request $request){
    //入力するときにバリデーションチェックを設ける
    $request->validate([
       'img_path' => 'required|file|image|mimes:png,jpeg',
       'price'=>'required',
    ]);
/* 
create_exhibitproductのpost送信を行うためのデータベースの処理。
1.storage > public > img配下に画像が保存されるように処理をする。
2.今回は一つ一つデータベースに値を登録する処理を記述。
3.登録されたらコンビニmypageに遷移される。同時に登録されました~みたいなメッセージを出す。
*/
$img = $request->file('img_path');
$path = $img->store('img','public');//1

$product = new products;
$product->product_name = $request->product_name;
$product->img_path=$path;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->save();//2

return redirect('admin')->with('flash_message', __('Registered.'));//3

}
 //.............................................................終了12

    public function staff_productlist_display(){
        return view('haiki_staff.staff_productlist_display');
        } //.............................................................10
    //画面を表示するための処理ここまで
}
