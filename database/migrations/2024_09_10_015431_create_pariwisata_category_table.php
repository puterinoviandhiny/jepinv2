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
        Schema::create('pariwisata_category', function (Blueprint $table) {
            $table->comment('Tabel Kategori Pariwisata');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('master_id')->nullable();
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('master_id')->references('id')->on('pariwisata_master')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pariwisata_category');
    }
};
