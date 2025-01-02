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
        Schema::create('employment_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_status_question_ID')->constrained('employment_status_questions')->onDelete('cascade');
            $table->foreignId('user_ID')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_employment_status_ID')->constrained('user_employment_statuses')->onDelete('cascade');
            $table->string('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_answers');
    }
};
