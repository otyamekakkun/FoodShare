<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');//商品ID
            $table->integer('admin_id')->nullable();//管理者ID 
            $table->integer('user_id')->nullable();//ユーザーID
          $table->string('product_name')->nullable();//商品の名前を入力するためのもの
            $table->string('img_path')->nullable();//画像を入れるもの
           $table->integer('price')->nullable();//価格を入力するためのもの
           $table->date('best_by_date')->nullable();//賞味期限を記述するためのもの
            $table->string('prefecture');//都道府県名を記述するところ
           $table->boolean('bought')->default(false)->nullable();//購入されたかどうかをチェックする
           $table->string('email');//emailを入力するところ
           $table->string('convinience_name');//コンビニの名前
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
