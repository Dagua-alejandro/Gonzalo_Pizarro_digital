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
        Schema::create('place_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constrained()->onDelete('cascade');
            $table->string('path'); // Ruta del archivo en storage
            $table->boolean('is_featured')->default(false); // Foto principal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_images');
    }
};
