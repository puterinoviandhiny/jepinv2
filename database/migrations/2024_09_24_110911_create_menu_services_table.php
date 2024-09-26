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
        Schema::create('menu_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->string('name')->comment('Nama');
            $table->string('slug')->nullable();
            $table->enum('type_access', ['direct', 'blank'])->default('direct')->comment('Tipe akses menu');
            $table->enum('type_logo_web', ['icon', 'image'])->default('icon')->comment('Tipe logo menu di website');
            $table->enum('type_logo_mobile', ['icon', 'image'])->default('icon')->comment('Tipe logo menu di mobile');
            $table->string('logo')->nullable();
            // $table->string('color')->nullable()->comment('Warna background');
            $table->string('url')->default('#');
            $table->tinyInteger('position')->default(0)->comment('Urutan menu');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('parent_id')->references('id')->on('menu_services')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_services');
    }
};
