<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
      * コンビニスタッフのテーブル
      * 1 スタッフのid
      * 2 スタッフのパスワード
      * 3 スタッフのemailアドレス
      * 4 コンビニの種類の名前（ローソンとか、セブンイレブンみたいな）
      * 5 支店名 (主に地名が入る 渋谷とか新宿とかなど)
      * 6 timestamp
      */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('staff_id');                    //...........1
            $table->string('staff_password','255');            //...........2
            $table->string('staff_email','255');               //...........3
            $table->string('convinience_store','255');         //...........4
            $table->string('convinience_store_branch','255');  //...........5
            $table->timestamps();                              //...........6 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins',function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('staff_password','255');
            $table->string('staff_email','255');
            $table->string('convinience_store','255');
            $table->string('convinience_store_branch','255');
            $table->timestamps();
        });
    }
}
