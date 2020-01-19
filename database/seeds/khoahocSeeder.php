<?php

use Illuminate\Database\Seeder;

class khoahocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $khoahoc = [
        	['tenkhoahoc'=> '6'],
        	['tenkhoahoc'=> '7'],
        	['tenkhoahoc'=> '8'],
        	['tenkhoahoc'=> '9']
        ];
        foreach ($khoahoc as $key => $value) {
        	DB::table('khoahoc')->insert($value);
        }
    }
}
