<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Escuela>
 */
class EscuelaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'director' => $this->faker->name(),
            'codigopostal' => $this->faker->postcode(),
        ];
    }
}
