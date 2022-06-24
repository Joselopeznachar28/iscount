<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('socios')->insert([
            'name'           => 'Jose',
            'lastname'       => 'Lopez',
            'identification' => '24432223',
            'email'          => 'joselopez@gmail.com',
            'address'        => Str::random(11),
            'status'         => 'Por Pagar',
            'membership'          => Str::random(7),
        ]);

    DB::table('socios')->insert([
        'name'           => 'Luis',
        'lastname'       => 'Brazon',
        'identification' => '18873321',
        'email'          => 'luisbrazon@gmail.com',
        'address'        => Str::random(11),
        'status'         => 'Activo',
        'membership'          => Str::random(7),
    ]);

    DB::table('socios')->insert([
        'name'           => 'Anthony',
        'lastname'       => 'Marin',
        'identification' => '87373981',
        'email'          => 'anthonymarin@gmail.com',
        'address'        => Str::random(11),
        'status'         => 'Activo',
        'membership'          => Str::random(7),
    ]);

    DB::table('socios')->insert([
        'name'           => 'Carlos',
        'lastname'       => 'Rocca',
        'identification' => '98712212',
        'email'          => 'carlosrocca@gmail.com',
        'address'        => Str::random(11),
        'status'         => 'Por Pagar',
        'membership'          => Str::random(7),
    ]);

    DB::table('socios')->insert([
        'name'           => 'Luis',
        'lastname'       => 'Jimenez',
        'identification' => '99999897',
        'email'          => 'luisjimenez@gmail.com',
        'address'        => Str::random(11),
        'status'         => 'Activo',
        'membership'          => Str::random(7),
    ]);
}
}
