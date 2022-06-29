<?php

namespace Database\Factories;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AcquisitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => function(){
                return Department::factory()->create()->id;
            },
            'date_acquisition' =>$this->faker->date(),
            'date_max' => Carbon::now(),
            'description' => $this->faker->text(25) ,
            'acquisition_code' =>('COD-'. (string) Str::random(5)) ,
        ];
    }
}
