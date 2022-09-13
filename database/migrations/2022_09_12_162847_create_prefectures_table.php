<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
     *都道府県テーブル 概要
     * 1都道府県のID
     * 2都道府県の名前
     * 3タイムスタンプ
     */
    public function up()
    {
        Schema::create('prefectures', function (Blueprint $table) {
            $table->increments('prefectures');      //..............................1
            $table->string('prefectures_name',8);   //..............................2
            $table->timestamps();                   //..............................3
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prefectures',function (Blueprint $table) {
            $table->increments('prefectures');
            $table->string('prefectures_name',8);
            $table->timestamps();
        });
    }
}
