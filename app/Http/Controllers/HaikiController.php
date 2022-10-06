<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
    /*
    'email'=>'required|email:filter,dns',
    'password'=>'required|min:6',
    'password2'=>'required|min:6|same:password',
    */
]);
//$product = products::find($id);
$id = Auth::id();
$user = User::find($id);
$user->name=$request->name;
$user->email=$request->email;
$user->password= Hash::make($request->password);
$user->save();
//パスワードをハッシュ化させる必要があるのでそれを記述する


return redirect('haiki/shopper_mypage');//..............画面表示するもの

//===========================================================================2終了
}

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

        $id = Auth::guard('admin')->id();
        $admin = DB::table('admins')->find($id);
        return view('haiki_staff.staff_profile_display',['admin'=>$admin]);//...................画面表示するもの
    } 

    public function staff_profile_edit(Request $request)
{
$request->validate([
    //'email'=>'email:filter,dns',//emailのバリデーション
   // 'password'=>'string|regex:/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\-]{6,24}$/',
//パスワードに関しては半角英数字で8文字の記述を対応させる。

    //入力ネームと同じものを対応させる
    //後で詳しく設定する（今は最低限）
    /*
    'email'=>'required|string|min:8',
    'password'=>'required|min:6',
    'convinience_name'=>'required',
    'convinience_branch'=>'required',
    'adress'=>'required'
*/
]);

$id = Auth::guard('admin')->id();
//$product = products::where("admin_id",$id)->paginate(5);
//$admin=DB::table('admins')->find($id);
$admin = Admin::find($id);
//$admin->name = $request->name;
$admin->password= Hash::make($request->password);
$admin->convinience_name = $request->convinience_name;
$admin->convinience_branch = $request->convinience_branch;
$admin->prefecture=$request->prefecture;
$admin->adress=$request->adress;
$admin->save();
return redirect('admin')->with('flash_message', __('Registered.'));
}
/*
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
    /*
    'email'=>'required|email:filter,dns',
    'password'=>'required|min:6',
    'password2'=>'required|min:6|same:password',
    
]);
//$product = products::find($id);
$id = Auth::id();
$user = User::find($id);
$user->email=$request->email;
$user->password= Hash::make($request->password);
$user->save();
//パスワードをハッシュ化させる必要があるのでそれを記述する


return redirect('haiki/shopper_mypage');//..............画面表示するもの

//===========================================================================2終了
}



*/















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
    //一応バリデーションも含ませとく。変更の処理がなけレバそのまま行けるように変更できるようにする
    $request->validate([
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
        'product_name'=>'required',
       'img_path' => 'required|file|image|mimes:png,jpeg',
       'price'=>'required',
       'best_by_date'=>'required'
    ]);

    //laravelで表示されるための処理。
$img = $request->file('img_path');
$path = $img->store('img','public');//1

//2つ保存されればゴール
//vueで表示するための処理
$image = $request->file("img_path");
$path = Storage::disk("public")->putFile('profile', $image); 
$imagePath = "/storage/" . $path;







$id = Auth::guard('admin')->id();
$product = new products;
$product->product_name = $request->product_name;
$product->admin_id = $id;//現在ログインしているコンビニユーザー情報のidをこの中に入れる
//$product->img_path=$imagePath;
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