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
            $table->string('ISBN',25)->primary();
            $table->string('title',250);
            $table->string('subtitle',250);
            $table->string('author_name',25);
            $table->string('info',250);
            $table->string('image',200);
            $table->string('company',250);
            $table->string('genre_code',25);
            $table->integer('year');
            $table->timestamps();
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
