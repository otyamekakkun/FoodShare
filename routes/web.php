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
//⬇️TOPページを表示するためのもの
Route::get('/haiki/top_display',[App\Http\Controllers\HaikiController::class, 'top_display'])->name('haiki.top_display');

