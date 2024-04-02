<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->boolean('visible');
            $table->timestamps();

            // Aggiungi la chiave esterna
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        
    }

    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
