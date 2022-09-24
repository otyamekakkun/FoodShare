<?php

namespace App\Http\Controllers;

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
    'email'=>'required',
    'password'=>'required|min:6',

]);
return view('haiki_shopper.shopper_mypage_display');

}






    public function shopper_productlist_display(){
        return view('haiki_shopper.shopper_productlist_display');
    } //.............................................................3

    public function shopper_productdetail_display(){
        return view('haiki_shopper.shopper_productdetail_display');
    } //.............................................................4

    public function staff_mypage_display(){
        return view('haiki_staff.staff_mypage_display');
    } //.............................................................5

    public function staff_profile_display(){
        return view('haiki_staff.staff_profile_display');
    } //.............................................................6

    public function staff_exhibitproduct_display(){
        return view('haiki_staff.staff_exhibitproduct_display');
    } //.............................................................7

    public function staff_buyproduct_display(){
        return view('haiki_staff.staff_buyproduct_display');
    } //.............................................................8

    public function staff_productedit_display(){
    return view('haiki_staff.staff_productedit_display');
    } //.............................................................9

    public function staff_exhibitproduct_list_display(){
    return view('haiki_staff.staff_exhibitproduct_list_display');
    } //.............................................................10

    public function staff_productlist_display(){
        return view('haiki_staff.staff_productlist_display');
        } //.............................................................10
    








    //画面を表示するための処理ここまで
}
