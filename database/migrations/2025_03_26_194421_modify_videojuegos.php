<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->renameColumn('fecha_lanzamiento', 'anio_lanzamiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->renameColumn('anio_lanzamiento', 'fecha_lanzamiento');
        });
    }
};
