<?php

namespace App\Http\Controllers\shopper;
use App\Models\products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/*メール機能実装
ただしローカル環境ではコメントアウトする
use App\Mail\Test;
use Illuminate\Support\Facades\Mail;
*/
class ProductController extends Controller
{
    //商品一覧と商品詳細画面のコントローラ
public function shopper_productlist_display(){
    $product = DB::table('products')->get();
    return view('haiki_shopper.shopper_productlist_display',['products'=>$product]);
} 
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
   // メールの処理はここまで
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
}
