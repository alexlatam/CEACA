<?php

use Illuminate\Database\Seeder;
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
        	'name' =>  'juan Perez',
        	'email' => 'example@example.com',
            'pais' => 'venezuela',
            'plan_id' => 1,
            'empresa' => 'ceaca',
            'plan_id' => 1, 
        	'password' =>  Hash::make('123admin'),
        ]);
    }
}
