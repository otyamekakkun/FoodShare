<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaikiController extends Controller
{
    //画面を表示するための処理
    public function shopper_mypage_display(){
        return view('haiki_shopper.shopper_mypage_display');
    }
}
