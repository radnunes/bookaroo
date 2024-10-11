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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('subtitle', 100)->nullable();
            $table->string('description', 500);
            $table->string('ISBN',17)->unique();
            $table->integer('pages');
            $table->date('publication_date');
            $table->string('publisher', 100);
            $table->string('language', 2);
            $table->integer('rating')->nullable();

            $table->string('image_name')->nullable();
            $table->string('image_type')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
