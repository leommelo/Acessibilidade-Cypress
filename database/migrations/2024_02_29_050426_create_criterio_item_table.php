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
        Schema::create('criterio_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('criterio_id');
            $table->unsignedBigInteger('item_id');

            $table->foreign('criterio_id')->references('id')->on('criterios')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('itens')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterio_item');
    }
};
