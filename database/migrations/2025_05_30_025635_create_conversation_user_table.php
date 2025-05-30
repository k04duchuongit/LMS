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
        Schema::create('conversation_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')  // nối với bảng users
                ->onDelete('set null');

            $table->foreignId('conversation_id')
                ->constrained('conversations')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Trước khi drop bảng, drop khóa ngoại thủ công để tránh lỗi rollback
        Schema::table('conversation_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['conversation_id']);
        });

        Schema::dropIfExists('conversation_user');
    }
};
