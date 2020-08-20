<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //workテーブルに初期データ投入
        DB::table('works')->insert([
            ['work_name' => 'けいおん！'],
            ['work_name' => 'ゆるキャン△']
        ]);
    }
}
