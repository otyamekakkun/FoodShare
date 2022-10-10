<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\RestappController;
use App\Http\Controllers\HaikiController; //laravel8なので左のことを記述してルートの書き方を楽にする
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//drills/newはあくまでも実験的要素が絡んでいるので終わったら必ず消去すること
Route::get('/drills/new',[App\Http\Controllers\DrillsController::class, 'new'])->name('drills.new');
Route::post('/drills',[App\Http\Controllers\DrillsController::class, 'create'])->name('drills.create');
Route::get('/drills/index',[App\Http\Controllers\DrillsController::class, 'index'])->name('drills.index');
Route::get('/drills/ind',[App\Http\Controllers\DrillsController::class, 'ind'])->name('drills.ind');
Route::get('/drills/inde',[App\Http\Controllers\DrillsController::class, 'inde'])->name('drills.inde');


//画面を表示するための処理ここから開始
/**
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
 * 11(コンビニ)コンビニ側でも今出回っている商品の一覧を項目するもの(購入はできないように設定する)
 */
//利用客を表示するもの
/*

ログインしている状態でないと開発が進むことができない場合は上記のrouteを使うこと。
Route::get('/haiki/shopper_mypage',[App\Http\Controllers\HaikiController::class, 'shopper_mypage_display'])->name('haiki_shopper.shopper_mypage_display')->middleware('auth:admin');                           //1
Route::get('/haiki/shopper_profile',[App\Http\Controllers\HaikiController::class, 'shopper_profile_display'])->name('haiki_shopper.shopper_profile_display')->middleware('auth:admin');                        //2
Route::get('/haiki/shopper_productlist',[App\Http\Controllers\HaikiController::class, 'shopper_productlist_display'])->name('haiki_shopper.shopper_productlist_display')->middleware('auth:admin');            //3
Route::get('/haiki/shopper_productdetail',[App\Http\Controllers\HaikiController::class, 'shopper_productdetail_display'])->name('haiki_shopper.shopper_productdetail_display')->middleware('auth:admin');      //4

//haiki shareのご利用スタッフが利用するもの
Route::get('/haiki/staff_profile',[App\Http\Controllers\HaikiController::class, 'staff_profile_display'])->name('haiki_shopper.staff_profile_display')->middleware('auth:admin');                              //6
Route::get('/haiki/staff_exhibitproduct',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_display'])->name('haiki_shopper.staff_exhibitproduct_display')->middleware('auth:admin');         //7
Route::get('/haiki/staff_buyproduct',[App\Http\Controllers\HaikiController::class, 'staff_buyproduct_display'])->name('haiki_shopper.staff_buyproduct_display')->middleware('auth:admin');                     //8
Route::get('/haiki/staff_productedit',[App\Http\Controllers\HaikiController::class, 'staff_productedit_display'])->name('haiki_shopper.staff_productedit_display')->middleware('auth:admin');                  //9
Route::get('/haiki/staff_exhibitproductlist',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_list_display'])->name('haiki_shopper.staff_exhibitproduct_list_display')->middleware('auth:admin'); //10
Route::get('/haiki/staff_productlist',[App\Http\Controllers\HaikiController::class, 'staff_productlist_display'])->name('haiki_shopper.staff_productlist_display')->middleware('auth:admin'); //11
//これは新たに追加したものだから修正する必要がありそう
Route::get('/haiki/{id}/staff_productedit',[App\Http\Controllers\HaikiController::class, 'staff_productedit_display'])->name('haiki_shopper.staff_productedit_display');                  //9
Route::get('/haiki/{id}/staff_productdetail',[App\Http\Controllers\HaikiController::class, 'staff_productdetail_display'])->name('haiki_shopper.staff_productdetail_display');                  //9
*/
// ここから追加

//それ以外なら下記の項目を使うこと
//=======================================================
//ログイン ユーザー登録画面のコントローラシリーズ
//=======================================================
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/register/admin', [RegisterController::class, 'registerAdmin'])->name('admin-register');
Route::view('/admin', [HaikiController::class, 'admin'])->middleware('auth:admin')->name('admin-home');

//=============================================
//ご利用客のマイページ 1
//=============================================
Route::get('/haiki/shopper_mypage',[HaikiController::class,'shopper_mypage_display'])->name('haiki_shopper.shopper_mypage_display');   


//==================================================================-ここまで

//================================================================
// shopper_profileのフォーム入力ページ 2
//================================================================
Route::get('/haiki/shopper_profile',[HaikiController::class, 'shopper_profile_display'])->name('haiki_shopper.shopper_profile_display');                        //2これは自分専用のページにしたい
Route::post('/haiki/{id}/shopper_profile',[HaikiController::class, 'shopper_profile_edit'])->name('haiki_shopperprofile_edit');

//考察１idをパラメータ内に含ませる

//================================================================ここまで

//=====================================================================
//お客様の商品一覧を閲覧するもの 3
//=====================================================================
Route::get('/haiki/shopper_productlist',[HaikiController::class, 'shopper_productlist_display'])->name('haiki_shopper.shopper_productlist_display');            //3
Route::get('/haiki/{id}/shopper_productdetail',[HaikiController::class, 'shopper_productdetail_display'])->name('haiki_shopper.shopper_productdetail_display');      //4

//haiki shareのご利用スタッフが利用するもの

//=========================================
//コンビニスタッフプロフィール編集画面を作るもの 4
//========================================
Route::get('/haiki/staff_profile',[HaikiController::class, 'staff_profile_display'])->name('haiki_shopper.staff_profile_display');    
Route::post('/haiki/{id}/staff_profile',[HaikiController::class, 'staff_profile_edit'])->name('haiki_staffrprofile_edit');

//=============================================================ここまで4


//=================================================
//商品を出品する画面 5
//=================================================
Route::get('/haiki/staff_exhibitproduct',[HaikiController::class, 'staff_exhibitproduct_display'])->name('haiki_shopper.staff_exhibitproduct_display'); 
Route::post('create_exhibitproduct',[HaikiController::class,'create_exhibitproduct'])->name('create.exhibit');

//=================================================================商品を出品するホームページ制作ここまで。

//===================================
//購入された商品一覧6                 //
//===================================
Route::get('/haiki/staff_buyproduct',[HaikiController::class, 'staff_buyproduct_display'])->name('haiki_shopper.staff_buyproduct_display');

//=========================================6ここまで

//==============================================================
//7商品編集画面                                                 //
//==============================================================
/*
1 商品詳細画面を編集する
2 商品をアップロードするコード
3 商品詳細画面で削除する
*/

Route::get('/haiki/{id}/staff_productedit',[HaikiController::class, 'staff_productedit_display'])->name('haiki_shopper.staff_productedit_display'); 
Route::post('/haiki/{id}/staff_productedit', [HaikiController::class, 'update_exhibitproduct'])->name('exhibit.update');//商品をアップロードする
Route::post('/haikii/{id}/staff_productedit', [HaikiController::class, 'destroy'])->name('drills.delete');//削除

//======================================================================================================ここまで




//==========================================================
//商品詳細画面
//=======================================================
Route::get('/haiki/{id}/staff_productdetail',[HaikiController::class, 'staff_productdetail_display'])->name('haiki_shopper.staff_productdetail_display');   
Route::post('/haiki/{id}/staff_productdetail',[HaikiController::class,'shopper_productdetail_bought'])->name('bought.update');
//=======================================ここまで

//===============================================
//出品した商品の一覧                              //
//===============================================
Route::get('/haiki/staff_exhibitproductlist',[HaikiController::class, 'staff_exhibitproduct_list_display'])->name('haiki_shopper.staff_exhibitproduct_list_display'); //10

//form入力チェック用のroute
// ここから追加
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/register/admin', [RegisterController::class, 'registerAdmin'])->name('admin-register');
//Route::view('/admin','admin')->middleware('auth:admin')->name('admin-home');

//マイページでもデータベースが表示できるような処理を施す
Route::get('/admin', [App\Http\Controllers\HaikiController::class, 'admin'])->middleware('auth:admin')->name('admin-home');


//====================================================
//json形式で記述するもの
//==========================================


//json形式でデータベースを取得したときに格納しとく場所
//ここ後にセキュリティ対策をしないと大変なことになりそう（パスワードダダ漏れになるし。）
//例えばこのurlをグチャグチャにする。
Route::get('/haiki/index1',[HaikiController::class, 'index1'])->name('drills.index1');
Route::get('/haiki/index2',[HaikiController::class, 'index2'])->name('drills.index2');
Route::get('/haiki/index3',[HaikiController::class, 'productjson'])->name('product.json');


Route::get('/haiki/index4',[HaikiController::class, 'userjson'])->name('user.json');










//json形式で渡すものはしっかりと対策する必要がある。
//staff_exhibitproductをjson形式で渡す
Route::get('/haiki/jsonstaff_exhibit',[HaikiController::class, 'staff_exhibitproduct_json'])->name('product.json');
//ok

Route::get('/haiki/{id}/jsonstaffproductdetail',[HaikiController::class, 'staffproductdetailjson'])->name('products.json');














//===========
//ゴミファイルになるかどうか
//==========
//staff_profileのフォームを入力する
Route::post('/haiki/staff_profile',[HaikiController::class, 'staff_profile_edit'])->name('haiki_staffprofile_edit');

