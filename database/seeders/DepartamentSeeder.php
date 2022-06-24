<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departaments')->insert([
            'name'  => 'Tecnologia'
        ]);

        DB::table('departaments')->insert([
            'name' => 'RRHH'
        ]);

        DB::table('departaments')->insert([
            'name' => 'Ama de Llaves'
        ]);

        DB::table('departaments')->insert([
            'name' => 'Mantenimiento'
        ]);

        DB::table('departaments')->insert([
            'name' => 'Compras'
        ]);
    }
}
