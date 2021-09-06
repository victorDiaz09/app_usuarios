<?php

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
        DB::table('users')->insert([
            'name' => 'Victor Andres',
            'email' => 'victor.dj200015@gmail.com',
            'password' => bcrypt('2015victor15'),
            'profession_id' => '3'
        ]);

        
    }
}
