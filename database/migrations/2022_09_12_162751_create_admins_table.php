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
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('staff_password','255');
            $table->string('staff_email','255');
            $table->string('convinience_store','255');
            $table->string('convinience_store_branch','255');
            $table->rememberToken();
        //  9/12時点 $table->id('prefectures');
          //  $table->int('address_1');
          //メモintはないらしい
          

//sがつくかつかないかで意味が全然変わってくる
            $table->timestamps();
            //timestamp はcreate_atとupdate_at以外でtimestampを使いたいときにする。
          //  $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
