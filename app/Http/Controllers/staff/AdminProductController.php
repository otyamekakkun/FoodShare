<?php

namespace App\Http\Controllers\staff;

use App\Models\Admin;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
//商品を出品する画面と商品を編集する画面
public function staff_exhibitproduct_display(){
    $id = Auth::guard('admin')->id();
    $admin = Admin::find($id);
    return view('haiki_staff.staff_exhibitproduct_display',['admins'=>$admin]);
} 
//商品出品する画面を表示するための処理
public function create_exhibitproduct(Request $request){
$request->validate([
    'product_name'=>'required',
    'img_path' => 'required|file|image|mimes:png,jpeg',
    'price'=>'required',//全角で入力した瞬間enterを押された瞬間消える
    'best_by_date'=>'required'
]);
$image = $request->file("img_path");
$path = Storage::disk("public")->putFile('profile', $image); 
$imagePath = "/storage/" . $path;
$id = Auth::guard('admin')->id();
$product = new products;
$product->product_name = $request->product_name;
$product->admin_id = $id;//現在ログインしているコンビニユーザー情報のidをこの中に入れる
$product->img_path=$imagePath;
$product->img_path=$imagePath;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->prefecture=$request->prefecture;
$product->email=$request->email;
$product->convinience_name=$request->convinience_name;
$product->save();
return redirect('admin')->with('flash_message', __('Registered.'));
} //商品の情報をデータベースに登録し直す処理

//=========================================================================商品を出品する画面ここまで

//====================================================
//商品編集画面
//=====================================================
public function staff_productedit_display($id){
    $product = products::find($id);
    return view('haiki_staff.staff_productedit_display',['products'=>$product]);
 } //...................................................商品編集する画面
public function destroy($id){
    products::find($id)->delete();
    return redirect('admin');
} //..................................................商品を削除するためのコード
public function update_exhibitproduct(Request $request,$id){
    $request->validate([
        'product_name'=>'required',
        'img_path' => 'required|file|image|mimes:png,jpeg',
        'price'=>'required',//全角で入力した瞬間enterを押された瞬間消える
        'best_by_date'=>'required'
    ]);
$img = $request->file('img_path');
$path = $img->store('img','public');//1
$image = $request->file("img_path");
$path = Storage::disk("public")->putFile('profile', $image); 
$imagePath = "/storage/" . $path;
$product = products::find($id);
$product->product_name = $request->product_name;
$product->img_path=$imagePath;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->save();
return redirect('admin')->with('flash_message', __('Registered.'));
}//............................................商品の編集した画面をアップロードするもの
public function destory($id){
    products::find($id)->delete();
    return redirect('admin');
}
//======================================================削除フラグ
//======================================================================8商品編集画面ここまで

}
