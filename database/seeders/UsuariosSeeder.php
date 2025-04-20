<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Piedad',
                    'email' => 'pi@correo.es',
                    'password' => Hash::make('1234Prueba'),
                    'rol' => 'administrador',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Rodrigo',
                    'email' => 'ro@correo.es',
                    'password' => Hash::make('1234Prueba'),
                    'rol' => 'administrador',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Marta',
                    'email' => 'ma@correo.es',
                    'password' => Hash::make('1234Prueba'),
                    'rol' => 'cliente',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Martín',
                    'email' => 'tin@correo.es',
                    'password' => Hash::make('1234Prueba'),
                    'rol' => 'cliente',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]

            ]
        );
    }
}
