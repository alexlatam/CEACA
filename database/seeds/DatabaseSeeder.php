<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
         $this->call(SubscriberSeeder::class);

         DB::table('plans')->insert([
            'title' => 'inicial',
            'description' => '000',
            'imagen' => 'imagen',
            'monto' => '100000',
         ]);
    	 $this->call(UserSeeder::class);
         $this->call(InformationSeeder::class);

    }
}
