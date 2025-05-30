<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subject_lecturers', function (Blueprint $table) {
            $table->id();

            $table->string('subject_code');
            $table->foreign('subject_code')
            ->references('subject_code')
            ->on('subjects')
            ->onDelete('cascade');

            $table->string('lecturer_code');
            $table->foreign('lecturer_code')
                ->references('lecturer_code')
                ->on('lecturers')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('subject_lecturers', function (Blueprint $table) {
            $table->dropForeign(['subject_code']);
            $table->dropForeign(['lecturer_code']);
        });

        Schema::dropIfExists('subject_lecturers');
    }
};
