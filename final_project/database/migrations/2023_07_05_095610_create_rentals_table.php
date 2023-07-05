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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->integer('rental_id',25)->primary();
            $table->unsignedBigInteger('ISBN');
            $table->string('lending',25);
            $table->unsignedBigInteger('emp_no');
            $table->timestamps();

            $table->foreign('ISBN')->references('ISBN')->on('books');
            $table->foreign('emp_no')->references('emp_no')->on('emps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
