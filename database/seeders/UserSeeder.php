<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Phoebe Claire",
            'user_name' => "phoebe",
            'email' => 'phoebe@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => true,
        ]);
    }
}
