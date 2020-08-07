<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenericTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generic', function (Blueprint $table) {
            $table->increments('id')->length(5);
            $table->string('group_id', 2);//varchar型
            $table->string('disp_name', 100);
            $table->string('value', 50);
            $table->integer('sort_num_1')->length(2);//int型
            $table->integer('sort_num_2')->length(2);
            $table->integer('del_flg')->length(1)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generic');
    }
}
