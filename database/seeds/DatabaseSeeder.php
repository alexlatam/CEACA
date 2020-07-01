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
            'plan' => 'inicial',
            'monto' => '100000',
         ]);
    	 $this->call(UserSeeder::class);
         $this->call(InformationSeeder::class);

    }
}
