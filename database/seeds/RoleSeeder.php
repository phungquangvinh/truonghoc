<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
        	[
        		'name' => 'AdminTractor',
        		'display_name' => 'Hiệu trưởng',
        		'description' => 'quyền tối thượng'
        	],
        	[
        		'name' => 'mod',
        		'display_name' => 'Giáo viên',
        		'description' => 'nhân viên'
        	],
        	[
        		'name' => 'hocsinh',
        		'display_name' => 'Học sinh',
        		'description' => 'học sinh'
        	]
        ];
        foreach ($role as $key => $value) {
        	DB::table('roles')->insert($value);
        }
    }
}
