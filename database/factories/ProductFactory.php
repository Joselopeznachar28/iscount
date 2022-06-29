<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provider_id'   => function(){
                return Provider::factory()->create()->id;
            },
            'name'          => $this->faker->name(),
            'price'        => $this->faker->randomNumber(4, true),
            'description'   => $this->faker->text(50),
        ];
    }
}
