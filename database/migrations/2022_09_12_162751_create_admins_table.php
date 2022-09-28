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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
         //   $table->boolean('is_super')->default(false);
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
