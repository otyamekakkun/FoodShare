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
    } //...........................................ログインした人専用の画面表示するもの
//===========================================================1終了

//===================================================================
//shopper_profile_display 2   お客様のプロフィールを編集する画面         //
//===================================================================
    public function shopper_profile_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_profile_display',['user'=>$user]);
    } //...........................................画面表示するもの


public function shopper_profile_edit(Request $request)
{
$request->validate([
    'name'=>['required','max:255'],
    'email'=>['required','string', 'email:strict,dns,spoof', 'max:255', 'unique:users'],
    'password'=>['required','min:8','max:255'],
    'password_confirmation'=>['required','same:password'],
]);
$id = Auth::id();
$user = User::find($id);
$user->name=$request->name;
$user->email=$request->email;
$user->password= Hash::make($request->password);//パスワードをハッシュ化させる必要があるのでそれを記述する
$user->save();
return redirect('haiki/shopper_mypage');//..............お客様の情報を更新するもの
}
//===========================================================================2終了

//===================================================================
//3 お客様商品一覧                                                    //
//===================================================================
    public function shopper_productlist_display(){
        $product = DB::table('products')->get();
        return view('haiki_shopper.shopper_productlist_display',['products'=>$product]);
    } //.............................................................画面表示するもの
//===========================================================================3終了

//==============================================================
//4お客用商品詳細ページ                                          //
//==============================================================
    public function shopper_productdetail_display($id){
        $product = products::find($id);   
        $user = Auth::id();      
        return view('haiki_shopper.shopper_productdetail_display',['products'=>$product],['users'=>$user]);
    }
     //商品詳細ページを写すための画面
    public function shopper_productdetail_bought ($id){
        $user = Auth::id();
        $product = products::find($id);//商品専用のid
        $product->user_id = $user;//現在ログインしているコンビニユーザー情報のidをこの中に入れる
        $product->user_id=$user;
        $product->bought =1;
        $product->save();
        //メールの処理ここから。ローカル環境ではコメント化する。
        /*
         //商品名で何を購入されたのかをメール内で記述する
  $text = $product->product_name;
        $users = Auth::user()->email;
        $admin=products::find($id)->email;
        $emails = [$users,$admin];
                    foreach ($emails as $email){
        Mail::to($email)->send(new Test($text));
                    }
        メールの処理はここまで
        */
        return redirect('haiki/shopper_mypage');
    } //商品が購入された時に更新するための処理ここまで
    public function shopper_productdetail_cancel ($id){
        $user = Auth::id();
        $product = products::find($id);//商品専用のid
        $product->user_id = $user;//現在ログインしているコンビニユーザー情報のidをこの中に入れる
        $product->user_id=$user;
        $product->bought =0;
        $product->save();
        return redirect('haiki/shopper_mypage');
    } 
    //購入がキャンセルされた時に更新するための処理
//==========================================================10ここまで

//=======================================================================
//管理者ログイン用のマイページ                                              //
//=======================================================================
public function admin(){
    $id = Auth::guard('admin')->id();
    $admin = DB::table('admins')->find($id);
    return view('admin',['admin'=>$admin]);
}
}