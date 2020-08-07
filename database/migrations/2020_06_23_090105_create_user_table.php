<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id')->length(5);//AI
            $table->string('name', 100);//varchar型
            $table->string('mail_address', 100);
            $table->string('password', 100);
            $table->dateTime('create_date')->nullable();//datetime型
            $table->string('create_user', 100)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_user', 100)->nullable();
            $table->integer('del_flg')->length(1)->default(0);//int型
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}

//del_flgのデフォルト値
//作成者や作成日などのnull許容
