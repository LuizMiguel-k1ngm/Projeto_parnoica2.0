<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        DB::table('users')->insert([
            [
                'name' => 'valter',
                'email' => 'valter@gmail.com',
                'password' => bcrypt('12346'),
                'created_at' => date('Y-m-d H:i:s')


            ]


        ]);



        
    }
}
