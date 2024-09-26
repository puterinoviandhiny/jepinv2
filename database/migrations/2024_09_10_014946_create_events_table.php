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
        Schema::create('events', function (Blueprint $table) {
            $table->comment('Tabel Event/Agenda');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->enum('type', ['event', 'agenda'])->default('event');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('location')->nullable();
            $table->string('category')->nullable()->comment('Kategori yang berisi data array dengan menyimpan ID dari kategori event');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
