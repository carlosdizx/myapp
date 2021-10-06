<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
