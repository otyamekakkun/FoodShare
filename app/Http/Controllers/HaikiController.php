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
















    //画面を表示するための処理ここまで
}
