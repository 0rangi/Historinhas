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
        Schema::create('historias', function (Blueprint $table) {
            $table->bigincrements('idHist');
            $table->string('nomeHist');
            $table->string('descricaoHist');
            $table->string('autor');
            $table->int('paginas');
            $table->string('classificacao');
            $table->unsignedBigInteger('genId');
            $table->foreign('genId')->references('idGenero')->on('Generos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
