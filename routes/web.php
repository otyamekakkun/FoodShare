<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaikiController;
use App\Http\Controllers\staff\AdminProfileController;
use App\Http\Controllers\staff\AdminProductlistController;
use App\Http\Controllers\staff\AdminProductController;
use App\Http\Controllers\staff\AdminDetailController;
use App\Http\Controllers\shopper\ProfileController;
use App\Http\Controllers\shopper\ProductController;
use App\Http\Controllers\JsonsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// ログインするためのルート
Auth::routes();
//トップページ表示用
Route::get('/', function () {return view('welcome');});
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

//================================================================
// shopper_profileのフォーム入力ページ 2
//================================================================
Route::get('/haiki/shopper_profile',[ProfileController::class, 'shopper_profile_display'])->name('haiki_shopper.shopper_profile_display'); 
Route::post('/haiki/{id}/shopper_profile',[ProfileController::class, 'shopper_profile_edit'])->name('haiki_shopperprofile_edit');

//=====================================================================
//お客様の商品一覧を閲覧するもの 3
//=====================================================================
Route::get('/haiki/shopper_productlist',[ProductController::class, 'shopper_productlist_display'])->name('haiki_shopper.shopper_productlist_display');          
Route::get('/haiki/{id}/shopper_productdetail',[ProductController::class, 'shopper_productdetail_display'])->name('haiki_shopper.shopper_productdetail_display');   

//=========================================
//コンビニスタッフプロフィール編集画面を作るもの 4
//========================================
Route::get('/haiki/staff_profile',[AdminProfileController::class, 'staff_profile_display'])->middleware('auth:admin')->name('haiki_shopper.staff_profile_display');    
Route::post('/haiki/{id}/staff_profile',[AdminProfileController::class, 'staff_profile_edit'])->middleware('auth:admin')->name('haiki_staffrprofile_edit');

//=================================================
//商品を出品する画面 5
//=================================================
Route::get('/haiki/staff_exhibitproduct',[AdminProductController::class, 'staff_exhibitproduct_display'])->middleware('auth:admin')->name('haiki_shopper.staff_exhibitproduct_display'); 
Route::post('create_exhibitproduct',[AdminProductController::class,'create_exhibitproduct'])->middleware('auth:admin')->name('create.exhibit');

//===================================
//購入された商品一覧6                 
//===================================
Route::get('/haiki/staff_buyproduct',[AdminProductlistController::class, 'staff_buyproduct_display'])->middleware('auth:admin')->name('haiki_shopper.staff_buyproduct_display');

//==============================================================
//7商品編集画面                                                 //
//==============================================================
Route::get('/haiki/{id}/staff_productedit',[AdminProductController::class, 'staff_productedit_display'])->middleware('auth:admin')->name('haiki_shopper.staff_productedit_display'); 
Route::post('/haiki/{id}/staff_productedit', [AdminProductController::class, 'update_exhibitproduct'])->middleware('auth:admin')->name('exhibit.update');//商品をアップロードする
Route::post('/haikii/{id}/staff_productedit', [AdminProductController::class, 'destroy'])->middleware('auth:admin')->name('drills.delete');//削除
//==========================================================
//商品詳細画面
//=======================================================
Route::get('/haiki/{id}/staff_productdetail',[AdminDetailController::class, 'staff_productdetail_display'])->middleware('auth:admin')->name('haiki_shopper.staff_productdetail_display');
Route::post('/haiki/{id}/staff_productdetail',[ProductController::class,'shopper_productdetail_bought'])->name('bought.update');
Route::post('/haiki/{id}/staff_productdetai',[ProductController::class,'shopper_productdetail_cancel'])->name('bought.cancel');

//===============================================
//出品した商品の一覧                              //
//===============================================
Route::get('/haiki/staff_exhibitproductlist',[AdminProductlistController::class, 'staff_exhibitproduct_list_display'])->middleware('auth:admin')->name('haiki_shopper.staff_exhibitproduct_list_display'); //10


//=================================================
//staffのマイページでもデータベースが表示できるような処理を施す
//=================================================
Route::get('/admin', [App\Http\Controllers\HaikiController::class, 'admin'])->middleware('auth:admin')->name('admin-home');

//=========================================
//json形式で記述するもの
//==========================================
Route::get('/haiki/index1',[JsonsController::class, 'index1'])->name('drills.index1');
Route::get('/haiki/index3',[JsonsController::class, 'productjson'])->name('product.json');
Route::get('/haiki/index4',[JsonsController::class, 'userjson'])->name('user.json');
Route::get('/haiki/index5',[JsonsController::class, 'buyjson'])->name('buy.json');
Route::get('/haiki/jsonstaff_exhibit',[JsonsController::class, 'staff_exhibitproduct_json'])->name('product.json');
Route::get('/haiki/{id}/jsonstaffproductdetail',[JsonsController::class, 'staffproductdetailjson'])->name('products.json');

//=======================================
//パスワードリマインダー
//======================================
Route::get('password/admin/reset', [App\Http\Controllers\Auth\AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('password/admin/email', [App\Http\Controllers\Auth\AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('password/admin/reset/{token}', [App\Http\Controllers\Auth\AdminResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('password/admin/reset', [App\Http\Controllers\Auth\AdminResetPasswordController::class, 'reset'])->name('admin.password.update');
Route::get('contact2',[MailableController::class, 'index'] )->name('contact.index');
Route::post('contact2', [MailableController::class, 'send']);