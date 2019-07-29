<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class desarrollador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desarrolladores')->insert([
            'nombres' => 'Juan',
            'apellidos' => 'Romero',
            'email' => 'Juan@gmail.com',
            'telefono' => '88503066'
        ]);
    }
}

