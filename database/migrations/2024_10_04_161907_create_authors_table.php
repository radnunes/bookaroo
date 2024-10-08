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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('bio', 250);
            $table->string('nationality', 30);
            $table->date('birthdate');
            $table->char('gender', 1);
            $table->integer('literary_moviment_id')/*->constrained('literary_moviments')*/->nullable();
            $table->integer('award_id')/*->constrained('awards')*/->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
