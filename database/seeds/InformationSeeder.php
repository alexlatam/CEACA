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
        DB::table('infos')->insert([
        	'atributo' => 'telefono 1',
        	'valor' => '0000000',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'telefono 2',
        	'valor' => '00000003132',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'email',
        	'valor' => 'email@example.com',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'twitter',
        	'valor' => '@twitter',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'facebook',
        	'valor' => '@facebook',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'linkedin',
        	'valor' => '@linkedin',
        ]);

        DB::table('infos')->insert([
        	'atributo' => 'instagram',
        	'valor' => '@instagram',
        ]);
    }
}
