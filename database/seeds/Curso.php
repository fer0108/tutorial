<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Curso extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lengua= DB::table('lenguas')->select('id')->take(1)->get();
        $desarrollador= DB::table('desarrolladores')->select('id')->take(1)->get();

        DB::table('cursos')->insert([
            'curso' => 'Miskito',
            'descripcion' => 'Descripcion de Curso de Miskito',
            'lengua_id' => $lengua[0]->id,
            'desarrollador_id' => $desarrollador[0]->id
        ]);
        DB::table('cursos')->insert([
            'curso' => 'Mayagna',
            'descripcion' => 'Descripcion de Curso de Mayagna',
            'lengua_id' => $lengua[0]->id,
            'desarrollador_id' => $desarrollador[0]->id
        ]);
        DB::table('cursos')->insert([
            'curso' => 'Kriol',
            'descripcion' => 'Descripcion de Curso de Kriol',
            'lengua_id' => $lengua[0]->id,
            'desarrollador_id' => $desarrollador[0]->id
        ]);
    }
}
