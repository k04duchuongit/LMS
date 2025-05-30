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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('class_code');
            $table->foreign('class_code')
            ->references('class_code') // Liên kết với cột class_code
            ->on('classes') // Liên kết với bảng classes
            ->onDelete('cascade');
            $table->enum('exercise_type', ['quiz', 'essay']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
