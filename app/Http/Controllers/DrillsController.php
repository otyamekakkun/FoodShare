<?php
//実験的要素も絡めている。提出する際は必ず消去することを忘れない。
namespace App\Http\Controllers;

use LDAP\Result;
use App\Models\Drill;
use Illuminate\Http\Request;

class DrillsController extends Controller
{
    //
    public function new(){
        return view('drills.new');
    }

    public function create(Request $request){
        $request->validate([
            'title'=>'required|string|max:255',
            'category_name' => 'required|string|max:255',
            'problem0' => 'required|string|max:255',
            'problem1' => 'string|max:255',
            'problem2' => 'string|max:255',
           'img_path' => 'required',
            //'problem4' => 'string|max:255',
            //'problem5' => 'string|max:255',
            //'problem6' => 'string|max:255',
            //'problem7' => 'string|max:255',
            //'problem8' => 'string|max:255',
            //'problem9' => 'string|max:255',
        ]);
 // モデルを使って、DBに登録する値をセット
 $drill = new Drill;


 // １つ１つ入れるか
//        $drill->title = $request->title;
//        $drill->category_name = $request->category_name;
//        $drill->save();

 // fillを使って一気にいれるか
 // $fillableを使っていないと変なデータが入り込んだ場合に勝手にDBが更新されてしまうので注意！
 $drill->fill($request->all())->save();

 // リダイレクトする
 // その時にsessionフラッシュにメッセージを入れる
 return redirect('/drills/new')->with('flash_message', __('Registered.'));
 
}
//登録したものを表示する機能を導入する
public function index(){
    $drills = Drill::all();
    return view('drills.index',['drills'=>$drills]);
}




}
