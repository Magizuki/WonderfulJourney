<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Table
        DB::table('users')->insert([
            'name' => 'John Wick',
            'email' => 'johnwick@gmail.com',
            'phone' => '081303891066',
            'role' => 'Admin',
            'password' => Hash::make('tes12345') 
        ]);

        //Insert Table
        DB::table('users')->insert([
            'name' => 'Darth Vader',
            'email' => 'darthvader@gmail.com',
            'phone' => '081135741566',
            'role' => 'User',
            'password' => Hash::make('tes12345') 
        ]);
    }
}
