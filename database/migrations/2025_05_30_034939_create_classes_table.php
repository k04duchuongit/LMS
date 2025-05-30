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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('subject_code')->nullable();
            $table->foreign('subject_code')
                ->references('subject_code') // Liên kết với cột subject_code
                ->on('subjects') // Liên kết với bảng subjects
                ->onDelete('set null'); // Xóa khi môn học bị xóa, có thể để trống
          
            $table->string('class_code')->unique(); // Mã lớp học, duy nhất
            $table->string('name'); // Tên lớp học
            $table->integer('max_students')->default(30); // Số lượng tối đa sinh viên trong lớp
            $table->string('required_skills')->nullable(); // Kỹ năng yêu cầu, có thể để trống
            $table->text('description')->nullable(); // Mô tả lớp học, có thể để trống
            $table->foreignId('lecturer_code')->nullable()->constrained('lecturers')->onDelete('set null'); // Liên kết với bảng lecturers, có thể để trống
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
