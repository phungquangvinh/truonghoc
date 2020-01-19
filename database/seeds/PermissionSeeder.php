<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
        		'name' => 'create_user',
        		'display_name' => 'Tạo user',
        		'description' => 'Tạo user'
        	],
        	[
        		'name' => 'delete_user',
        		'display_name' => 'Xóa user',
        		'description' => 'Xóa user'
        	],
        	[
        		'name' => 'edit_user',
        		'display_name' => 'Sửa user',
        		'description' => 'Sửa user'
        	],
        	[
        		'name' => 'show_list_user',
        		'display_name' => 'Sửa user',
        		'description' => 'Sửa user'
        	],
        	[
        		'name' => 'show_list_diem',
        		'display_name' => 'Xem điểm thi',
        		'description' => 'Xem điểm thi'
        	],
        	[
        		'name' => 'edit_diem',
        		'display_name' => 'Sửa điểm thi',
        		'description' => 'Sửa điểm thi'
        	],
        	[
        		'name' => 'xoa_diem',
        		'display_name' => 'Xóa điểm thi',
        		'description' => 'Xóa điểm thi'
        	],
        	[
        		'name' => 'show_list_monhoc',
        		'display_name' => 'Xem môn học',
        		'description' => 'Xem môn học'
        	],
        	[
        		'name' => 'edit_monhoc',
        		'display_name' => 'Sửa môn học',
        		'description' => 'Sửa môn học'
        	],
        	[
        		'name' => 'create_monhoc',
        		'display_name' => 'Thêm môn học',
        		'description' => 'Thêm môn học'
        	],
        	[
        		'name' => 'delete_monhoc',
        		'display_name' => 'Xóa môn học',
        		'description' => 'Xóa môn học'
        	]
        ];
        foreach ($permission as $key => $value) {
        	DB::table('permissions')->insert($value);
        }
    }
}
