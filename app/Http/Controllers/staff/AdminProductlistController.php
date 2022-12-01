<?php

namespace App\Http\Controllers\staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class AdminProductlistController extends Controller
{
 //出品された商品一覧と購入された商品一覧
public function staff_exhibitproduct_list_display(){
    $id = Auth::guard('admin')->id();
    $admin = DB::table('admins')->find($id);
    return view('haiki_staff.staff_exhibitproduct_list_display',['admin'=>$admin]);//...................画面表示するもの
}
public function staff_buyproduct_display(){
    $id = Auth::guard('admin')->id();
    $admin = DB::table('admins')->find($id);
    return view('haiki_staff.staff_buyproduct_display',['admins'=>$admin]);
} //.............................................購入された商品を表す画面

}
