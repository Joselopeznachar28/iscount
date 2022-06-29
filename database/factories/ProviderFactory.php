<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
            'name'              => $this->faker->name(),
            'type_identification' => 'V-',
            'identification'    => $this->faker->numerify('########'),
            'email'             => $this->faker->unique()->safeEmail(),
            'contact'           => $this->faker->numerify('###########'),
            'description'       => $this->faker->text(50),  
        ];
    }
}
