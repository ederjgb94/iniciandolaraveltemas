<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trailer>
 */
class TrailerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arreglo = ['1 remolque', '2 remolques', '3 remolques'];
        return [
            'dimension' => $arreglo[array_rand($arreglo)],
            'peso' => fake()->randomFloat(2, 0, 999999.99),
            'boss_id' => fake()->numberBetween(1, 10),
        ];
    }
}
