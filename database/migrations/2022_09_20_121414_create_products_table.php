<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');//商品ID
            $table->integer('admin_id');
            $table->string('product_name');//商品の名前を入力するためのもの
            $table->string('img_path');//画像を入れるもの
            $table->integer('price');//価格を入力するためのもの
            $table->date('best_by_date');//賞味期限を記述するためのもの
            $table->boolean('bought')->default(false);//購入されたかどうかをチェックする

           $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}