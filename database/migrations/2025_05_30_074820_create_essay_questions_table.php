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
        Schema::create('essay_questions', function (Blueprint $table) {
            $table->id();
                 $table->foreignId('id_essay')->constrained('essay_exercises')->onDelete('cascade');

            $table->text('question_text'); // Câu hỏi
            $table->float('max_score'); // Điểm tối đa cho câu hỏi
            $table->string('suggest')->nullable(); // Gợi ý cho câu hỏi, có thể để trống
            $table->integer('min_words')->default(0); // Số từ tối thiểu cho câu trả lời, mặc định là 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essay_questions');
    }
};
