<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

/**
 * 商品テーブル
 * 1 商品のID
 * 2 商品の名前
 * 3 商品の画像
 * 4 商品の日付
 * 5 購入されているかどうかのチェック(デフォルト０商品購入していない状態)
 * （1になったら購入されたということにする）
 * 6 タイムスタンプ
 */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');               //...............1
            $table->string('product_name','255');           //...............2
            $table->string('product_pic','255');            //...............3
            $table->date('best_bydate');                    //...............4
            $table->boolean('buy_check')->default('0');     //...............5
            $table->timestamps();                           //...............6
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products',function (Blueprint $table) {
            $table->increments('product_id'); 
            $table->string('product_name','255'); 
            $table->string('product_pic','255');
            $table->date('best_bydate');
            $table->boolean('buy_check')->default('0');
            $table->timestamps();
        });
    }
}
