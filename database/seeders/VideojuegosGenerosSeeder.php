<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Videojuego;
use App\Models\Genero;

class VideojuegosGenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videojuego_genero')->insert([
            ['videojuego_id' => 1, 'genero_id' => 1],  // The Legend of Zelda: Breath of the Wild → Acción
            ['videojuego_id' => 2, 'genero_id' => 1],  // God of War Ragnarok → Acción
            ['videojuego_id' => 2, 'genero_id' => 2],  // God of War Ragnarok → Aventura
            ['videojuego_id' => 3, 'genero_id' => 1],  // Elden Ring → Acción
            ['videojuego_id' => 3, 'genero_id' => 3],  // Elden Ring → Rol
            ['videojuego_id' => 4, 'genero_id' => 2],  // Minecraft → Aventura
            ['videojuego_id' => 4, 'genero_id' => 4],  // Minecraft → Estrategia
            ['videojuego_id' => 5, 'genero_id' => 3],  // The Witcher 3: Wild Hunt → Rol
            ['videojuego_id' => 5, 'genero_id' => 2],  // The Witcher 3: Wild Hunt → Aventura
            ['videojuego_id' => 6, 'genero_id' => 1],  // Red Dead Redemption 2 → Acción
            ['videojuego_id' => 6, 'genero_id' => 2],  // Red Dead Redemption 2 → Aventura
            ['videojuego_id' => 7, 'genero_id' => 1],  // Super Mario Odyssey → Acción
            ['videojuego_id' => 7, 'genero_id' => 2],  // Super Mario Odyssey → Aventura
            ['videojuego_id' => 8, 'genero_id' => 2],  // Hollow Knight → Aventura
            ['videojuego_id' => 8, 'genero_id' => 1],  // Hollow Knight → Acción
            ['videojuego_id' => 9, 'genero_id' => 3],  // Cyberpunk 2077 → Rol
            ['videojuego_id' => 9, 'genero_id' => 1],  // Cyberpunk 2077 → Acción
            ['videojuego_id' => 10, 'genero_id' => 3], // Dark Souls III → Rol
            ['videojuego_id' => 10, 'genero_id' => 1], // Dark Souls III → Acción
        ]);
    }
}
