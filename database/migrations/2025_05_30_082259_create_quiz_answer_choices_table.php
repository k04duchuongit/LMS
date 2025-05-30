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
        Schema::create('quiz_answer_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_quiz_answers')
                ->constrained('quiz_answers')
                ->onDelete('cascade');
            $table->timestamps();

            $table->foreignId('id_quiz_question')
                ->constrained('quiz_questions')
                ->onDelete('cascade');
            $table->enum('choice_code', ['A', 'B', 'C', 'D']); // Mã lựa chọn đáp án
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answer_choices');
    }
};
