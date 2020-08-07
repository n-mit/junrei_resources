<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grant', function (Blueprint $table) {
            $table->increments('company_code')->length(10);
            $table->integer('all_sum')->length(10);//int型
            $table->date('esti_period_start');//date型
            $table->date('esti_period_end');
            $table->integer('office_num')->length(5);
            $table->date('imp_period_start');
            $table->date('imp_period_end');
            $table->text('description_1', 3000);//text型
            $table->integer('sum_1')->length(100);
            $table->integer('total_sum_1')->length(100);
            $table->text('description_2', 3000);
            $table->integer('sum_2')->length(100);
            $table->integer('total_sum_2')->length(100);
            $table->dateTime('create_date');//datetime型
            $table->string('create_user', 100);
            $table->dateTime('update_date');
            $table->string('update_user', 100);

            //外部キー制約
            $table->foreign('company_code')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grant');
    }
}
