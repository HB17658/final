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
            $table->integer('rental_id',25);
            $table->string('ISBN',20);
            $table->integer('emp_no');
            $table->date('rental')->nullable();
            $table->date('return')->nullable();
            $table->timestamps();

            $table->foreign('emp_no')->references('emp_no')->on('emps');
            $table->foreign('ISBN')->references('ISBN')->on('books');
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
