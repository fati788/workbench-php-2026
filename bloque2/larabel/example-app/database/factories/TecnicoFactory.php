<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tecnico>
 */
class TecnicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *$table->id()->primary();
     * $table->string('nombre');
     * $table->string('apellidos');
     * $table->string('telefono');
     * $table->string('email');
     * $table->enum('estado',['ocupado' , 'libre'])->default('libre');
     * $table->timestamps();
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'telefono' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'estado' => 'libre'
        ];
    }
}
