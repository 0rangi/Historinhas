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
            $table->bigincrements('id');
            $table->string('nomeHist');
            $table->string('descricaoHist');
            $table->string('autor');
            $table->integer('paginas');
            $table->string('classificacao');
            $table->unsignedBigInteger('genId');
            $table->foreign('genId')->references('id')->on('generos');

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
