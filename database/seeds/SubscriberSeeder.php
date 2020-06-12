<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
        	'email' => 'usertest@example.com',
            'nombre' => 'juan',
            'pais' => 'venezuela',
            'empresa' => 'eutuxia',
        ]);
    }
}
