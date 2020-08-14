<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_posts', function (Blueprint $table) {
            $table->increments('sub_id')->length(5);
            $table->integer('admin_id')->unsigned();
            $table->string('sub_picture', 2000);
            $table->string('sub_comment', 200)->nullable();
            $table->dateTime('create_at')->nullable();

            // 外部キー制約
            $table->foreign('admin_id')->references('admin_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_posts');
    }
}
