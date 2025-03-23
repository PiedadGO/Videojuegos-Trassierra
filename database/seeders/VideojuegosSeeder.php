<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideojuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videojuegos')->insert([
            [
                'nombre' => 'The Legend of Zelda: Breath of the Wild',
                'desarrollador' => 'Nintendo',
                'anio_lanzamiento' => '2017',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'God of War Ragnarok',
                'desarrollador' => 'Santa Monica Studio',
                'anio_lanzamiento' => '2022',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elden Ring',
                'desarrollador' => 'FromSoftware',
                'anio_lanzamiento' => '2022',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Minecraft',
                'desarrollador' => 'Mojang Studios',
                'anio_lanzamiento' => '2011',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'The Witcher 3: Wild Hunt',
                'desarrollador' => 'CD Projekt Red',
                'anio_lanzamiento' => '2015',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Red Dead Redemption 2',
                'desarrollador' => 'Rockstar Games',
                'anio_lanzamiento' => '2018',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Super Mario Odyssey',
                'desarrollador' => 'Nintendo',
                'anio_lanzamiento' => '2017',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Hollow Knight',
                'desarrollador' => 'Team Cherry',
                'anio_lanzamiento' => '2017',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cyberpunk 2077',
                'desarrollador' => 'CD Projekt Red',
                'anio_lanzamiento' => '2020',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Dark Souls III',
                'desarrollador' => 'FromSoftware',
                'anio_lanzamiento' => '2016',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}