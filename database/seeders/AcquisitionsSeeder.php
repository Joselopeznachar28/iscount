<?php

namespace Database\Seeders;

use App\Models\Acquisition;
use Illuminate\Database\Seeder;

class AcquisitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acquisition::factory(10)->create();
    }
}
