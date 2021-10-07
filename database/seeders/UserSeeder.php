<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // User 1
        DB::table('users')->insert([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'mykad' => '808080808080',
            'roles' => 'admin',
            'password' => bcrypt('pass'), // Hash::make('pass')
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Abu',
            'email' => 'abu@gmail.com',
            'mykad' => '808080808090',
            'roles' => 'user',
            'password' => bcrypt('pass'), // Hash::make('pass')
        ]);

        // User 3
        DB::table('users')->insert([
            'name' => 'Siti',
            'email' => 'siti@gmail.com',
            'mykad' => '808080808070',
            'roles' => 'admin',
            'password' => bcrypt('pass'), // Hash::make('pass')
        ]);
    }
}
