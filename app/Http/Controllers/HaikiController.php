<?php
namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//メール機能
use App\Mail\Test;
use Illuminate\Support\Facades\Mail;
class HaikiController extends Controller
{
//===================================================================
 //shoepper_mypage1   お客様のマイページを表示するもの                   //
 //==================================================================
    public function shopper_mypage_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_mypage_display',['my_user'=>$user]);
    } 

//===========================================================================2終了
//=======================================================================
//管理者ログイン用のマイページ                                              //
//=======================================================================
public function admin(){
    $id = Auth::guard('admin')->id();
    $admin = DB::table('admins')->find($id);
    return view('admin',['admin'=>$admin]);
}
}