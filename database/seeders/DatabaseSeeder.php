<?php

namespace Database\Seeders;


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
        //\App\Models\Provider::factory(10)->create();
        //\App\Models\Product::factory(50)->create();
         $classes = [
            ProvidersSeeder::class,
            ProductsSeeder::class,
            DepartmentsSeeder::class,
            AcquisitionsSeeder::class
        ];

        $this->call($classes);
    }
}
