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
        Schema::create('event_category', function (Blueprint $table) {
            $table->comment('Tabel Kategori Event/Agenda');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
        });

        // Schema::create('event_categories', function (Blueprint $table) {
        //     $table->comment('Tabel Pivot Event/Agenda dengan Kategori');
        //     $table->foreignId('user_id');
        //     $table->foreignId('category_id');

        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('category_id')->references('id')->on('event_category');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_category');
        // Schema::dropIfExists('event_categories');
    }
};
