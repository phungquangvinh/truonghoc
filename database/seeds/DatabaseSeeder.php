<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersTableSeeder::class);
    	$this->call(khoahocSeeder::class);
    	$this->call(monhocSeeder::class);
    	$this->call(RoleSeeder::class);
    	$this->call(Role_use_Seeder::class);
    }
}
