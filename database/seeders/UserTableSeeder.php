<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            [
                'name' => 'Naufal',
                'email' => 'a@a.com',
                'password' => bcrypt('1111')
            ],
            [
                'name' => 'Naura Kamila',
                'email' => 'b@b.com',
                'password' => bcrypt('1111')
            ]
        ));
    }
}
