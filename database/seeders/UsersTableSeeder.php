<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'akbar',
                'email'=>'akbarali.cyryx@gmail.com',
                'password'=>Hash::make('1234')
            ],
            [
                'name'=>'ahmed',
                'email'=>'ahmedali.cyryx@gmail.com',
                'password'=>Hash::make('1234')
            ],
            [
                'name'=>'mohamed',
                'email'=>'mohamedali.cyryx@gmail.com',
                'password'=>Hash::make('1234')
            ]
        ]);
    }
}
