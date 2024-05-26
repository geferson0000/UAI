<?php

namespace Database\Factories;

use App\Models\ActuacionFiscal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\ActuacionFiscal>
 */
class ActuacionFiscalFactory extends Factory
{
    /**
     * Define the model's default state.
     * Define el estado predeterminado del modelo 
     * @return array<string, mixed>
    */

    protected $model = ActuacionFiscal::class;
    
    public function definition(): array
    {
        return [
            'objetivo' => $this->faker->sentence(),
            'tipo_auditoria_id' => 1
        ];
    }


}