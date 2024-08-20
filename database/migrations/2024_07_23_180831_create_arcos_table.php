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
        Schema::create('arcos', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nomeArco');
            $table->string('descricaoArco');
            $table->unsignedBigInteger('personagem_id');
            $table->foreign('personagem_id')->references('id')->on('personagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcos');
    }
};
