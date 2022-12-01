<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JsonsController extends Controller
{
//================================================
//json形式でファイルを保存するためのコントローラ       //
//================================================
public function index1(){
    $drill = DB::table('products')->get();
        return response()->json($drill);
    }    
    //index1の内容は基本的にファイルの中に入っているもの全てを取得する
    //.................................................................ここまで
    public function productjson(){
        $id = Auth::guard('admin')->id();
        $product = products::where("admin_id",$id)->get();
    return response()->json($product);
    }
    //管理者としてログインした時に、管理者専用の情報を取得するjson形式のデータベース
    //.................................................................ここまで
    
    public function userjson(){
        $id = Auth::id();
        $user = products::where('user_id',$id)->get();
    return response()->json($user);
    }
    //shopper自分が購入した商品を写し出すjson形式生成
    //ログインしているidを取得して、productsテーブルからuser_idと照合したカラムを取り出す。
    //.................................................................ここまで
    public function buyjson(){
        $id = Auth::guard('admin')->id();
        $product = products::where("admin_id",$id)->orderBy('updated_at','desc')->get();
    return response()->json($product);
    }//購入された商品情報を最新順に渡す。
    
}
