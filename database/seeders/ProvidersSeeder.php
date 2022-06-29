<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     Provider::factory(20)
     ->has(Product::factory()->count(2), 'products')
     ->create();

        /*DB::table('providers')->insert([
            'name'           => Str::random(10),
            'identification' => (int) Str::random(8),
            'email'          => (string) Str::random(15) . '@gmail.com',
            'contact'        => (int) Str::random(11),
            'description'    => (string) Str::random(50),
        ]);*/
    }
}
