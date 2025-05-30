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
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_quiz')
                ->constrained('quiz_exercises')
                ->onDelete('cascade');

            $table->string('student_code');
            $table->foreign('student_code')
                ->references('student_code')
                ->on('students')
                ->onDelete('cascade');
                
            $table->dateTime('submitted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
