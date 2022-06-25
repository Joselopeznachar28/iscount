<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Product::factory(100)->create();
        /*DB::table('products')->insert([
            'name'          => Str::random(10),
            'amount'        => rand(1,1000),
            'price'         => floatval(1000),
            'description'   => (string) Str::random(50),
        ]);*/
    }
}
