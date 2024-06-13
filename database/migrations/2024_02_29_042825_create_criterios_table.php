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
        Schema::create('criterios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diretriz_id');
            $table->string('codigo', 10);
            $table->string('nome', 100);
            $table->string('conformidade', 3);
            $table->timestamps();

            $table->foreign('diretriz_id')->references('id')->on('diretrizes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterios');
    }
};
