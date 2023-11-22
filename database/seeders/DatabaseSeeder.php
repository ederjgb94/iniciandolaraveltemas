<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Ejemplo 1
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Ejemplo 2
        // \App\Models\Boss::factory(10)->create();
        // \App\Models\Trailer::factory(20)->create();
        // \App\Models\Perro::factory(20)->create();

        \App\Models\Producto::factory(10)->create();
        \App\Models\Escuela::factory(10)->create();
        \App\Models\Alumno::factory(100)->create();

        // agregar alumnos a la escuela con el id 1
        \App\Models\Escuela::find(1)->alumnos()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        \App\Models\Escuela::find(2)->alumnos()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
    }
}
