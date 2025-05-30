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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id_send')
                ->nullable()
                ->constrained('users') // Liên kết với bảng users
                ->onDelete('set null');

            $table->string('title'); // Tiêu đề thông báo

            $table->text('notification_content'); // Nội dung thông báo

            $table->enum('target_type', ['all', 'student', 'lecturer'])
                ->default('all'); // Loại đối tượng nhận thông báo

            $table->foreignId('class_code')->constrained('classes')->onDelete('cascade'); // Liên kết với bảng classes

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
