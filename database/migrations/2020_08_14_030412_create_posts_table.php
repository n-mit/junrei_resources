<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id')->length(5);
            $table->integer('admin_id')->unsigned();
            $table->integer('work_id')->unsigned();
            $table->string('title', 50);
            $table->integer('pref_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('street', 50)->nullable();
            $table->string('etc', 30)->nullable();
            $table->string('picture', 2000);
            $table->string('comment', 200)->nullable();
            $table->dateTime('create_at')->nullable();

            // 外部キー制約
            $table->foreign('admin_id')->references('admin_id')->on('user');
            $table->foreign('work_id')->references('work_id')->on('works');
            $table->foreign('pref_id')->references('pref_id')->on('prefectures');
            $table->foreign('city_id')->references('city_id')->on('citys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
