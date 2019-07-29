<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lengua extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lenguas')->insert([
            'lengua' => 'Miskito',
        ]);
        DB::table('lenguas')->insert([
            'lengua' => 'Mayagna',

        ]);
        DB::table('lenguas')->insert([
            'lengua' => 'Kriol',
        ]);

    }
}
