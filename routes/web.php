<?php

use Illuminate\Support\Facades\Route;

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
//画面を表示するための処理ここから開始
//⬇️TOPページを表示するためのもの
//利用客を表示するもの
Route::get('/haiki/shopper_mypage',[App\Http\Controllers\HaikiController::class, 'shopper_mypage_display'])->name('haiki_shopper.shopper_mypage_display');
Route::get('/haiki/shopper_profile',[App\Http\Controllers\HaikiController::class, 'shopper_profile_display'])->name('haiki_shopper.shopper_profile_display');
Route::get('/haiki/shopper_productlist',[App\Http\Controllers\HaikiController::class, 'shopper_productlist_display'])->name('haiki_shopper.shopper_productlist_display');
Route::get('/haiki/shopper_productdetail',[App\Http\Controllers\HaikiController::class, 'shopper_productdetail_display'])->name('haiki_shopper.shopper_productdetail_display');

//haiki shareのご利用スタッフが利用するもの
Route::get('/haiki/staff_mypage',[App\Http\Controllers\HaikiController::class, 'staff_mypage_display'])->name('haiki_shopper.staff_mypage_display');
Route::get('/haiki/staff_profile',[App\Http\Controllers\HaikiController::class, 'staff_profile_display'])->name('haiki_shopper.staff_profile_display');
Route::get('/haiki/staff_exhibitproduct',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_display'])->name('haiki_shopper.staff_exhibitproduct_display');
Route::get('/haiki/staff_buyproduct',[App\Http\Controllers\HaikiController::class, 'staff_buyproduct_display'])->name('haiki_shopper.staff_buyproduct_display');
Route::get('/haiki/staff_productedit',[App\Http\Controllers\HaikiController::class, 'staff_productedit_display'])->name('haiki_shopper.staff_productedit_display');
Route::get('/haiki/staff_exhibitproduct',[App\Http\Controllers\HaikiController::class, 'staff_exhibitproduct_list_display'])->name('haiki_shopper.staff_exhibitproduct_list_display');

















// ここから追加
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');
