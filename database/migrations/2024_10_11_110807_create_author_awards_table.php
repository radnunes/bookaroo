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
        Schema::create('author_awards', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('award_id')->constrained('awards');
            $table->primary(['author_id', 'award_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_awards');
    }
};
