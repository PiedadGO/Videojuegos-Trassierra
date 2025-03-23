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
                'fecha_lanzamiento' => '2017-03-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'God of War Ragnarok',
                'desarrollador' => 'Santa Monica Studio',
                'fecha_lanzamiento' => '2022-11-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elden Ring',
                'desarrollador' => 'FromSoftware',
                'fecha_lanzamiento' => '2022-02-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Minecraft',
                'desarrollador' => 'Mojang Studios',
                'fecha_lanzamiento' => '2011-11-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'The Witcher 3: Wild Hunt',
                'desarrollador' => 'CD Projekt Red',
                'fecha_lanzamiento' => '2015-05-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Red Dead Redemption 2',
                'desarrollador' => 'Rockstar Games',
                'fecha_lanzamiento' => '2018-10-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Super Mario Odyssey',
                'desarrollador' => 'Nintendo',
                'fecha_lanzamiento' => '2017-10-27',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Hollow Knight',
                'desarrollador' => 'Team Cherry',
                'fecha_lanzamiento' => '2017-02-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cyberpunk 2077',
                'desarrollador' => 'CD Projekt Red',
                'fecha_lanzamiento' => '2020-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Dark Souls III',
                'desarrollador' => 'FromSoftware',
                'fecha_lanzamiento' => '2016-03-24',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}