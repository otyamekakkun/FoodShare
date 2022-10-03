<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\RestappController;
//use App\Http\Controllers\ItemController;



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
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');
Route::view('/admin', [App\Http\Controllers\Auth\HaikiController::class, 'admin'])->middleware('auth:admin')->name('admin-home');



Route::get('/haiki/shopper_mypage',[App\Http\Controllers\HaikiController::class, 'shopper_mypage_display'])->name('haiki_shopper.shopper_mypage_display');                        
   //1これは自分専用のページにしたい
   //==================================================================--
   // shopper_profileのフォーム入力のpost送信
Route::get('/haiki/shopper_profile',[App\Http\Controllers\HaikiController::class, 'shopper_profile_display'])->name('haiki_shopper.shopper_profile_display');                        //2これは自分専用のページにしたい
//form入力チェック用のroute
//shopper_profileのフォームを入力する
Route::post('/haiki/shopper_profile',[App\Http\Controllers\HaikiController::class, 'shopper_profile_edit'])->name('haiki_shopperprofile_edit');
//=========================================================================================================

Route::get('/haiki/shopper_productlist',[App\Http\Controllers\HaikiController::class, 'shopper_productlist_display'])->name('haiki_shopper.shopper_productlist_display');            //3
Route::get('/haiki/shopper_productdetail',[App\Http\Controllers\HaikiController::class, 'shopper_productdetail_display'])->name('haiki_shopper.shopper_productdetail_display');      //4

//haiki shareのご利用スタッフが利用するもの
Route::get('/haiki/staff_profile',[App\Http\Controllers\HaikiController::class, 'staff_profile_display'])->name('haiki_shopper.staff_profile_display');    


/*
*商品出品をするホームページのルート
*
*
*/
Route::get('/haiki/staff_exhibitproduct',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_display'])->name('haiki_shopper.staff_exhibitproduct_display'); 
Route::post('create_exhibitproduct',[App\Http\Controllers\HaikiController::class,'create_exhibitproduct'])->name('create.exhibit');
//商品を出品するホームページ制作ここまで。
Route::get('/haiki/staff_buyproduct',[App\Http\Controllers\HaikiController::class, 'staff_buyproduct_display'])->name('haiki_shopper.staff_buyproduct_display');                     //8

//ここで編集する商品画面を作った

Route::get('/haiki/{id}/staff_productedit',[App\Http\Controllers\HaikiController::class, 'staff_productedit_display'])->name('haiki_shopper.staff_productedit_display');                  //9
Route::get('/haiki/{id}/staff_productdetail',[App\Http\Controllers\HaikiController::class, 'staff_productdetail_display'])->name('haiki_shopper.staff_productdetail_display');                  //9

Route::get('/haiki/staff_exhibitproductlist',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_list_display'])->name('haiki_shopper.staff_exhibitproduct_list_display'); //10



//form入力チェック用のroute
//staff_profileのフォームを入力する
Route::post('/haiki/staff_profile',[App\Http\Controllers\HaikiController::class, 'staff_profile_edit'])->name('haiki_staffprofile_edit');

// ここから追加
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);
Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');
//Route::view('/admin','admin')->middleware('auth:admin')->name('admin-home');

//マイページでもデータベースが表示できるような処理を施す
Route::get('/admin', [App\Http\Controllers\HaikiController::class, 'admin'])->middleware('auth:admin')->name('admin-home');


//商品の写真を入力するものデータベース
Route::get('/item/index', [App\Http\Controllers\ItemController::class, 'index'])->name('item.index');
Route::get('/create', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');
Route::post('/store', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');





//json形式でデータベースを取得したときに格納しとく場所
//ここ後にセキュリティ対策をしないと大変なことになりそう（パスワードダダ漏れになるし。）
//例えばこのurlをグチャグチャにする。
Route::get('/haiki/index1',[App\Http\Controllers\HaikiController::class, 'index1'])->name('drills.index1');
Route::get('/haiki/index2',[App\Http\Controllers\HaikiController::class, 'index2'])->name('drills.index2');
Route::get('/haiki/index3',[App\Http\Controllers\HaikiController::class, 'productjson'])->name('product.json');



//削除
Route::post('/haiki/{id}/staff_productedit', [App\Http\Controllers\HaikiController::class, 'destroy'])->name('drills.delete');