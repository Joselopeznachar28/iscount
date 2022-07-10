<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['Extranjero','Venezolano',]);

        return [
            'name'               => $this->faker->name(),
            'lastname'           => $this->faker->lastName(),
            'typeIdentification' => $type,
            'identification'     => $type=='Extranjero' ? 'J-'.$this->faker->numerify('#########') : 'V-'. $this->faker->numerify('########'),
            'email'              => $this->faker->safeEmail(),
            'address'            =>  $this->faker->text(20),
            'status'             => false,
        ];
    }
}
