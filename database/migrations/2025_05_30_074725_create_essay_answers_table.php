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
        Schema::create('essay_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_essay')->constrained('essay_exercises')->onDelete('cascade');

            $table->string('student_code');
            $table->foreign('student_code')
                ->references('student_code')
                ->on('students')
                ->onDelete('cascade');
            
            $table->dateTime('submitted_at')->nullable();
            $table->boolean('status')->default(false); // chấm or chưa

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essay_answers');
    }
};
