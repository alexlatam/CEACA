<?php

use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
        	'atributo' => 'telefono 1',
        	'valor' => '0000000',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'telefono 2',
        	'valor' => '00000003132',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'email',
        	'valor' => 'email@example.com',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'twitter',
        	'valor' => '@twitter',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'facebook',
        	'valor' => '@facebook',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'linkedin',
        	'valor' => '@linkedin',
        ]);

        DB::table('informations')->insert([
        	'atributo' => 'instagram',
        	'valor' => '@instagram',
        ]);
    }
}
