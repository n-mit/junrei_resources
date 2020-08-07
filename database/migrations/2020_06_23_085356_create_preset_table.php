<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset', function (Blueprint $table) {
            $table->increments('id')->length(10);
            $table->string('preset_name', 100)->nullable();//varchar型
            $table->string('discription', 3000)->nullable();
            $table->integer('sum')->length(100);//int型
            $table->string('note')->length(100);//varchar型
            $table->integer('total_sum')->length(100)->nullable();
            $table->string('abstract', 3000)->nullable();
            $table->dateTime('create_date')->nullable();//datetime型
            $table->string('create_user', 100)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 100)->nullable();
            $table->integer('del_flg')->length(1)->default(0)->nullable();//int型
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preset');
    }
}
