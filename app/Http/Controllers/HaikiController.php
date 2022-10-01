<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
//===================================================================
 //shoepper_mypage 1
 //==================================================================
 //画面表示
    public function shopper_mypage_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_mypage_display',['my_user'=>$user]);
    } 
    /*
    自分が購入したものを表示する
    今回は自分が購入したものを新しい順に記述する処理を施す。
    */
//===========================================================1終了



//===================================================================
//shopper_profile_display 2
//===================================================================
//画面表示
    public function shopper_profile_display(){
        return view('haiki_shopper.shopper_profile_display');
    } 
//========================================================2終了

//===================================================================
//3.shopper_profile_edit
//===================================================================

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
//==============================================================3終了


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
        $id = Auth::guard('admin')->id();
        $product = products::where("admin_id",$id)->paginate(2);

        return view('haiki_staff.staff_mypage_display',['products'=>$product]);
    } 
    /*
    データベースの処理を行う。
    今回は商品を出品したもの最新5件。自分が出品して購入されたもの最新5件を記述する。
    1.
    2.
    */
    
    
    
//========================================================5終了
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


//=====================================================
//コンビニ用の商品編集画面を表したもの
//=====================================================

    public function staff_productedit_display($id){

        //関数名を
        $product = products::find($id)->get();
        
    return view('haiki_staff.staff_productedit_display',['products'=>$product]);

    } //.............................................................9

//=========================================
//コンビニ側商品の詳細画面に行けるようにしたもの
//=========================================

    public function staff_productdetail_display($id){

        //関数名を
        $product = products::find($id);
        
    return view('haiki_staff.staff_productdetail_display',['products'=>$product]);

    } //.............................................................9




//========================================================================    
//コンビニスタッフが商品を出品したものをリスト化するもの
//========================================================================    

    public function staff_exhibitproduct_list_display(){

        //$drills = Drill::all();
        //return view('drills.index',['drills'=>$drills]); //drills.indexに値を渡している
        $id = Auth::guard('admin')->id();
        $product = products::where("admin_id",$id)->paginate(5);
        //ページネーションの処理できる？

        //$product = products::where("admin_id",$id);



    return view('haiki_staff.staff_exhibitproduct_list_display',['products'=>$product]);
    } 




//=================================
//管理者ログイン用のマイページ
//=================================

public function admin(){

    $id = Auth::guard('admin')->id();
    //ページネーションでしようか全ページ
    $product = products::where("admin_id",$id)->paginate(5);

    return view('admin',['products'=>$product]);
    
   // return view('admin');
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

//$idは管理者ログインのidを取得する
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
 //.............................................................終了12
    //画面を表示するための処理ここまで



//================================================
//json形式でファイルを保存するためのコントローラ
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

//==================================
//商品リストの取得をjson形式にしたもの
//=================================
public function productjson(){

    //$drills = Drill::all();
    //return view('drills.index',['drills'=>$drills]); //drills.indexに値を渡している
    $id = Auth::guard('admin')->id();
    $product = products::where("admin_id",$id)->get();
return response()->json($product);
} 









}


