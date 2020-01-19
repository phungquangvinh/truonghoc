<?php

use Illuminate\Database\Seeder;
use App\Monhoc;
class monhocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monhocs = [
        	['tenmonhoc' => 'Toán học'],
        	['tenmonhoc' => 'Hóa học'],
        	['tenmonhoc' => 'Sinh học'],
        	['tenmonhoc' => 'Vật lý'],
        	['tenmonhoc' => 'Lịch sử'],
        	['tenmonhoc' => 'Địa lý'],
        	['tenmonhoc' => 'Tiếng anh'],
        	['tenmonhoc' => 'Văn học'],
        	['tenmonhoc' => 'Thể dục']
        ];
        foreach ($monhocs as$monhoc) {
        	DB::table('monhoc')->insert($monhoc);
        }
    }
}
