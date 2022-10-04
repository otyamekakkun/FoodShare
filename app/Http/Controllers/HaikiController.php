<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HaikiController extends Controller
{

//===================================================================
 //shoepper_mypage1                                                 //
 //==================================================================
    public function shopper_mypage_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_mypage_display',['my_user'=>$user]);
    } //..................................................画面表示するもの
//===========================================================1終了

//===================================================================
//shopper_profile_display 2                                        //
//===================================================================
    public function shopper_profile_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_profile_display',['user'=>$user]);
    } //...........................................画面表示するもの


public function shopper_profile_edit(Request $request)
{
$request->validate([
    //入力ネームと同じものを対応させる
    //後で詳しく設定する（今は最低限）
    'email'=>'required|min:5',
    'password'=>'required|min:6',
    'password2'=>'required|min:6|same:password',
]);

$id = Auth::id();
$user = DB::table('users')->find($id);
return view('haiki_shopper.shopper_mypage_display',['my_user'=>$user]);//..............画面表示するもの

/*
public function staff_productedit_display($id){
    $product = products::find($id);
    return view('haiki_staff.staff_productedit_display',['products'=>$product]);
 } //...................................................


public function update_exhibitproduct(Request $request,$id){
    //入力するときにバリデーションチェックを設ける
    $request->validate([
'img_path' => 'required|file|image|mimes:png,jpeg',
'price'=>'required',
    ]);
$img = $request->file('img_path');
$path = $img->store('img','public');//1
$product = products::find($id);
$product->product_name = $request->product_name;
$product->img_path=$path;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->save();
return redirect('admin')->with('flash_message', __('Registered.'));
}//............................................商品の編集した画面をアップロードするもの

*/




//===========================================================================2終了

//===================================================================
//3.shopper_profile_edit                                           //
//===================================================================
}

//==============================================================3終了

//===================================================================
//4 お客様商品一覧                                                    //
//===================================================================

    public function shopper_productlist_display(){
        return view('haiki_shopper.shopper_productlist_display');
    } //.............................................................画面表示するもの

//==============================================================
//5お客用商品詳細ページ                                          //
//==============================================================

    public function shopper_productdetail_display(){
        return view('haiki_shopper.shopper_productdetail_display');
    } 

//=================================================ここまで

//=============================================================
//staffのprofileのdisplay(コンビニ情報を登録し直す)               //
//=============================================================
    public function staff_profile_display(){
        return view('haiki_staff.staff_profile_display');//...................画面表示するもの
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
return view('admin');//========================おそらく捨てられるものになりそう
}

//=============================================================ここまで

//==============================================================
//6コンビニ 商品出品画面                                          //
//==============================================================
    public function staff_exhibitproduct_display(){
        return view('haiki_staff.staff_exhibitproduct_display');
    } 

//==========================================================ここまで

//==============================================================
//7コンビニ 購入された商品一覧画面                                 //
//==============================================================

    public function staff_buyproduct_display(){
        return view('haiki_staff.staff_buyproduct_display');
    } //.............................................購入

//=====================================================
//コンビニ用の商品編集画面を表したもの
//=====================================================

public function staff_productedit_display($id){
    $product = products::find($id);
    return view('haiki_staff.staff_productedit_display',['products'=>$product]);
 } //...................................................

public function destroy($id){
    products::find($id)->delete();
    return redirect('admin');
} //..................................................削除するためのコード


public function update_exhibitproduct(Request $request,$id){
    //入力するときにバリデーションチェックを設ける
    $request->validate([
'img_path' => 'required|file|image|mimes:png,jpeg',
'price'=>'required',
    ]);
$img = $request->file('img_path');
$path = $img->store('img','public');//1
$product = products::find($id);
$product->product_name = $request->product_name;
$product->img_path=$path;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->save();
return redirect('admin')->with('flash_message', __('Registered.'));
}//............................................商品の編集した画面をアップロードするもの
//======================================================================商品編集画面ここまで

//=====================
//削除フラグ
//=====================
public function destory($id){
    products::find($id)->delete();
    return redirect('admin');
}
//======================================================削除フラグ

//=========================================
//コンビニ側商品の詳細画面に行けるようにしたもの
//=========================================
    public function staff_productdetail_display($id){
        $product = products::find($id);
        
    return view('haiki_staff.staff_productdetail_display',['products'=>$product]);
    } //.............................................................9画面を表示するもの

//========================================================================    
//コンビニスタッフが商品を出品したものをリスト化するもの
//========================================================================    
    public function staff_exhibitproduct_list_display(){
        $id = Auth::guard('admin')->id();
        $product = products::where("admin_id",$id)->paginate(5);
    return view('haiki_staff.staff_exhibitproduct_list_display',['products'=>$product]);
    } //...................................

//==========================================================ここまで

//=======================================================================
//管理者ログイン用のマイページ                                              //
//=======================================================================

public function admin(){
    $id = Auth::guard('admin')->id();
    $product = products::where("admin_id",$id)->paginate(5);
    return view('admin',['products'=>$product]);
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
$img = $request->file('img_path');
$path = $img->store('img','public');//1
$id = Auth::guard('admin')->id();
$product = new products;
$product->product_name = $request->product_name;
$product->admin_id = $id;//現在ログインしているコンビニユーザー情報のidをこの中に入れる
$product->img_path=$path;
$product->price = $request->price;
$product->best_by_date = $request->best_by_date;
$product->save();//2
return redirect('admin')->with('flash_message', __('Registered.'));//3
}

//==========================================================================

//================================================
//json形式でファイルを保存するためのコントローラ        //
//================================================
//これがjson形式で値を渡す方法
public function index1(Request $request){
    $drill = products::all();
    return response()->json($drill);
}

public function index2(Request $request){
    $drill = products::all();
    return response()->json($drill);
}
public function productjson(){
    $id = Auth::guard('admin')->id();
    $product = products::where("admin_id",$id)->get();
return response()->json($product);
}

}


//=========================================================json形式で渡すのここまで。