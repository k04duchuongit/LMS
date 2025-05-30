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
        Schema::create('class_student', function (Blueprint $table) {
            $table->id();

            // 1. Tạo cột trước
            $table->string('student_code');

            // 2. Sau đó mới khai báo khóa ngoại
            $table->foreign('student_code')
                ->references('student_code')
                ->on('students')
                ->onDelete('cascade');

            $table->string('class_code');
            $table->foreign('class_code')
                ->references('class_code')
                ->on('Classes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_student');
    }
};
