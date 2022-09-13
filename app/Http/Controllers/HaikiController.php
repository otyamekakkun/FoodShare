<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaikiController extends Controller
{
    //画面を表示するための処理
    //1 shopper_mypage
    public function shopper_mypage_display(){
        return view('haiki_shopper.shopper_mypage_display');
    }
    //2 shopper_profile
    public function shopper_profile_display(){
        return view('haiki_shopper.shopper_profile_display');
    }
//3 shopper_producr_list
    public function shopper_productlist_display(){
        return view('haiki_shopper.shopper_productlist_display');
    }

    public function shopper_productdetail_display(){
        return view('haiki_shopper.shopper_productdetail_display');
    }

//スタッフが扱う画面集
    public function staff_mypage_display(){
        return view('haiki_staff.staff_mypage_display');
    }

//スタッフが扱うプロフィール編集画面
    public function staff_profile_display(){
        return view('haiki_staff.staff_profile_display');
    }
//出品された商品を出品するページ
    public function staff_exhibitproduct_display(){
        return view('haiki_staff.staff_exhibitproduct_display');
    }

//購入された商品一覧を見るページ
    public function staff_buyproduct_display(){
        return view('haiki_staff.staff_buyproduct_display');
    }
//コンビニ側 商品を編集するページ
public function staff_productedit_display(){
    return view('haiki_staff.staff_productedit_display');
}

//コンビニ側商品を出品したものを見るページ
public function staff_exhibitproduct_list_display(){
    return view('haiki_staff.staff_exhibitproduct_list_display');
}










    //画面を表示するための処理ここまで
}
