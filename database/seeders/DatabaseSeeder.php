<?php

namespace Database\Seeders;

use App\Models\Curso;
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
        // \App\Models\User::factory(10)->create();
        for ($i = 1 ; $i <= 10 ; $i++)
        {
            $curso = new Curso;
            $curso->nombre ="Curso ".$i;
            $curso->descripcion ="Curso de lo que sea ".$i;
            $curso->duracion =$i." horas";
            $curso->tutor ="Tutor ".$i;
            $curso->portada ="laravel$i.jpg";
            $curso->save();
        }
    }
}
