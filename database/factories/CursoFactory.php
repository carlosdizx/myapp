<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre'=>$this->faker->sentence(),
          'descripcion'=>$this->faker->text(),
          'duracion'=>$this->faker->numberBetween($min = 10, $max = 40),
          'tutor'=>$this->faker->name(),
          'portada'=>$this->faker->paragraph(),
        ];
    }
}
