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
        // Schema::create('social_medias', function (Blueprint $table) {
        //     $table->comment('Tabel Sosial Media');
        //     $table->id();
        //     $table->foreignId('user_id');
        //     $table->string('name');
        //     $table->string('slug')->nullable();
        //     $table->string('url')->nullable();
        //     $table->enum('type_icon', ['icon', 'image'])->default('icon');
        //     $table->string('icon')->nullable();
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('social_medias');
    }
};
