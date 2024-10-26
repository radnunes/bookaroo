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
        Schema::create('author_literary_moviment', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('literary_moviment_id')->constrained('literary_moviments');
            $table->primary(['author_id', 'literary_moviment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author__literary_moviments');
    }
};
