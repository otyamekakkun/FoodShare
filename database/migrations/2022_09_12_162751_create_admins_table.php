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
      * 2 スタッフの名前
      * 3 スタッフのemailアドレス
      * 4 スタッフのパスワード
      * 5 コンビニの種類の名前（ローソンとか、セブンイレブンみたいな）
      * 6 支店名 (主に地名が入る 渋谷とか新宿とかなど)
      */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id'); //1
            $table->string('name'); // 2 
            $table->string('email')->unique();//3
            $table->string('password');//4   
             $table->string('convinience_name'); //5
            $table->string('convinience_branch');//6
            $table->text('prefecture');//7
            $table->text('adress');//8
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
