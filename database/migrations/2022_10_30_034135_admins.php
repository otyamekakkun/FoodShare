<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
    /*
    public function down()
    {
        //
    }
    */
}
