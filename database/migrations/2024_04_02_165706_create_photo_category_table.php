<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('photo_category', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('photo_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('photo_category');
    }
};
