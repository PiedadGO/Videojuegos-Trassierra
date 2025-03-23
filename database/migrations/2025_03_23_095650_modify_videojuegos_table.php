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
            $table->dropColumn('fecha_lanzamiento'); 
            $table->integer('anio_lanzamiento')->after('desarrollador'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videojuegos', function (Blueprint $table) {
            $table->dropColumn('anio_lanzamiento');
            $table->date('fecha_lanzamiento')->after('desarrollador');
        });
    }
};
