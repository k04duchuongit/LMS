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
        Schema::create('quiz_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_quiz_question')
                ->constrained('quiz_questions')
                ->onDelete('cascade');
            
            $table->string('choice_text'); // nội dung đáp án
            $table->boolean('is_correct')->default(false); // Đánh dấu đáp án đúng hay sai
            $table->enum('code', ['A', 'B', 'C', 'D']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_choices');
    }
};
