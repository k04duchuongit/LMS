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
        Schema::create('final_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')
                ->constrained('exercises')
                ->onDelete('cascade');
            
            $table->string('student_code');
            $table->foreign('student_code')
                ->references('student_code')
                ->on('students')
                ->onDelete('cascade');
            
            $table->decimal('score', 5, 2)->default(0.00);
            
            $table->enum('exercise_type', ['quiz', 'essay']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_scores');
    }
};
