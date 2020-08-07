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
        DB::table('admins')->insert([
        	'name' =>  'Administrador',
        	'email' => 'admin@ceaca.com',
        	'password' =>  Hash::make('Adminceaca'),
        ]);
    }
}
/*  */