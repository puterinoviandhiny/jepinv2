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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::create('role_user', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id');
        //     $table->foreignId('role_id');

        //     $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        //     $table->foreign('role_id')->references('id')->on('roles')->nullOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        // Schema::dropIfExists('role_user');
    }
};
