<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->increments('id')->length(5);
            $table->string('name', 50);//varchar
            $table->string('file_path', 100);
            $table->dateTime('create_date');//datetime型
            $table->string('create_user', 100);
            $table->dateTime('update_date');
            $table->string('update_user', 100);
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
        Schema::dropIfExists('document');
    }
}
