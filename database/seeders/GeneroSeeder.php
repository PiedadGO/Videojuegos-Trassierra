<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert([
            ['nombre' => 'Acción'],
            ['nombre' => 'Aventura'],
            ['nombre' => 'Rol'],
            ['nombre' => 'Estrategia'],
            ['nombre' => 'Deportes'],
        ]);
    }
}
