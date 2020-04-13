<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'name' => 'Manager',
			'email' => 'manager@manager.ru',
			'role' => 'manager',
			'password' => Hash::make('password')
		]);
    }
}
