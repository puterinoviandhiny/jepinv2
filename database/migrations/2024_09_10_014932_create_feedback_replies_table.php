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
        Schema::create('feedback_replies', function (Blueprint $table) {
            $table->comment('Tabel Balasan Feedback/Umpan Balik');
            $table->id();
            $table->foreignId('feedback_id');
            $table->foreignId('user_id')->nullable();
            $table->text('message');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('feedback_id')->references('id')->on('feedbacks')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback_replies');
    }
};
