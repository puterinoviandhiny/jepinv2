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
        Schema::create('pariwisata_images', function (Blueprint $table) {
            $table->comment('Tabel Gambar Pariwisata');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('pariwisata_id');
            $table->string('file')->nullable();
            $table->integer('position')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('pariwisata_id')->references('id')->on('pariwisata')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pariwisata_images');
    }
};
