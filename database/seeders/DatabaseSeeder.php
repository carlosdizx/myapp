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
        $curso = new Curso;
        $curso->nombre ="Laravel";
        $curso->descripcion ="Curso de laravel";
        $curso->duracion ="10 horas";
        $curso->tutor ="Juan Perez";
        $curso->portada ="laravel.jpg";
        $curso->save();
    }
}
