<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nivel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso= DB::table('cursos')->select('id')->take(1)->get();


        DB::table('niveles')->insert([
            'nivel' => 'Basico',
            'descripcion' => 'Descripcion de Curso Basico',
            'curso_id' => $curso[0]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Avanzado',
            'descripcion' => 'Descripcion de Curso Avanzado',
            'curso_id' => $curso[0]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Profesional',
            'descripcion' => 'Descripcion de Curso Profesional',
            'curso_id' => $curso[0]->id,

        ]);

        $curso1= DB::table('cursos')->select('id')->take(2)->get();


        DB::table('niveles')->insert([
            'nivel' => 'Basico',
            'descripcion' => 'Descripcion de Curso Basico',
            'curso_id' => $curso1[1]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Avanzado',
            'descripcion' => 'Descripcion de Curso Avanzado',
            'curso_id' => $curso1[1]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Profesional',
            'descripcion' => 'Descripcion de Curso Profesional',
            'curso_id' => $curso1[1]->id,

        ]);

        $curso2= DB::table('cursos')->select('id')->take(3)->get();


        DB::table('niveles')->insert([
            'nivel' => 'Basico',
            'descripcion' => 'Descripcion de Curso Basico',
            'curso_id' => $curso2[2]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Avanzado',
            'descripcion' => 'Descripcion de Curso Avanzado',
            'curso_id' => $curso2[2]->id,

        ]);
        DB::table('niveles')->insert([
            'nivel' => 'Profesional',
            'descripcion' => 'Descripcion de Curso Profesional',
            'curso_id' => $curso2[2]->id,

        ]);
    }
}
