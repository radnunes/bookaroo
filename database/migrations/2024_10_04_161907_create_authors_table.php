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
            //$table->ForeignId('literary_moviment_id')->constrained('literary_moviments');


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
        Schema::dropIfExists('authors');
    }
};
