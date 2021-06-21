<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'user_name'=>'Admin',
            'user_email'=>'admin@admin.com',
            'user_roles'=>'Admin',
            'user_password'=>Hash::make('admin'),
            'user_phone'=>'12345678'
        ]);
    }
}
