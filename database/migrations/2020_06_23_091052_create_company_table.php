<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id')->length(10);
            $table->string('company_name', 1000);//varchar
            $table->string('company_name_ja', 1000);
            $table->integer('postal_code')->length(10);//int型
            $table->string('prefecture_code', 2);
            $table->string('municipality', 100);
            $table->string('street_num', 100);
            $table->string('apartment', 100);
            $table->string('phone_num', 15);
            $table->string('representative', 100);
            $table->string('representative_person', 100);
            $table->string('capital', 100);
            $table->integer('industry_type')->length(2);
            $table->string('employment_security_code', 11);
            $table->integer('working_num')->length(10);
            $table->integer('employee_num')->length(10);
            $table->string('labor_office_pre_code', 2);
            $table->integer('applying')->length(2);
            $table->string('bank', 1000);
            $table->string('branch_bank', 1000);
            $table->integer('account_type')->length(2);
            $table->string('account_num', 7);
            $table->string('account_name', 1000);
            $table->string('account_name_ja', 1000);
            $table->string('branch_name_1', 1000);
            $table->string('branch_postal_code_1', 10);//1ページ目終了,26
            $table->string('branch_address_1', 1000);
            $table->integer('branch_emp_num_1')->length(10);
            $table->string('branch_name_2', 1000);
            $table->string('branch_postal_code_2', 10);
            $table->string('branch_address_2', 1000);
            $table->integer('branch_emp_num_2')->length(10);
            $table->string('branch_name_3', 1000);
            $table->string('branch_postal_code_3', 10);
            $table->string('branch_address_3', 1000);
            $table->integer('branch_emp_num_3')->length(10);
            $table->string('branch_name_4', 1000);
            $table->string('branch_postal_code_4', 10);
            $table->string('branch_address_4', 1000);
            $table->integer('branch_emp_num_4')->length(10);
            $table->string('attorney_name', 100);
            $table->string('attorney_name_ja', 100);
            $table->string('attorney_postal_code', 10);
            $table->string('attorney_pre_code', 2);
            $table->string('attorney_municipality', 100);
            $table->string('attorney_street_num', 100);
            $table->string('attorney_apartment', 100);
            $table->string('attorney_phone_num', 15);
            $table->string('attorney_representative', 100);
            $table->string('attorney_representative_person', 100);
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
        Schema::dropIfExists('company');
    }
}
