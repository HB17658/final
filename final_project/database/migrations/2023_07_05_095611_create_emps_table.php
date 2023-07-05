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
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_no',20)->primary();
            $table->string('pass',25);
            $table->unsignedBigInteger('dept_id');
            $table->string('emp_name',25);
            $table->timestamps();

            $table->foreign('dept_id')->references('dept_id')->on('depts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emps');
    }
};
