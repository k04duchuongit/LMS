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
        Schema::create('evalutes', function (Blueprint $table) {
            $table->id();


            $table->string('student_code')->nullable();
            $table->string('class_code');

            $table->foreign('student_code')
                ->references('student_code')
                ->on('students')
                ->onDelete('set null');

            $table->foreign('class_code')
                ->references('class_code')
                ->on('classes')
                ->onDelete('cascade');

            $table->float('convayed_score')->default(0);
            $table->float('attitude_score')->default(0);
            $table->float('support_score')->default(0);
            $table->string('comment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evalutes');
    }
};
