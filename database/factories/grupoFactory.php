<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class grupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->userName(),
            "descripcion" => $this->faker->paragraph(2)
        ];
    }
}
