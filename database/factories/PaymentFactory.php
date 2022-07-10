<?php

namespace Database\Factories;

use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'socio_id'          => function(){
                return Socio::factory()->create()->id;
            },
            'forma_pago'        => $this->faker->randomElement(['Bolivares','Divisas',]),
            'tipo_pago'         => $this->faker->randomElement(['Efectivo','Transferencia',]),
            'monto'             => $this->faker->numerify('####'),
            'comprobante'       => 'comprobante01',
            'fecha_pago'        => now(),
            'fecha_vencimiento' => now()->addMonth(),
            'descripcion'       => $this->faker->text(50),
        ];
    }
}
