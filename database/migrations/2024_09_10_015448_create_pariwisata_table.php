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
        Schema::create('pariwisata', function (Blueprint $table) {
            $table->comment('Tabel Pariwisata');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('master_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->enum('halal', ['ya', 'tidak'])->nullable();
            $table->string('district')->nullable()->comment('kelurahan');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('master_id')->references('id')->on('pariwisata_master')->nullOnDelete();
            $table->foreign('category_id')->references('id')->on('pariwisata_category')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pariwisata');
    }
};
