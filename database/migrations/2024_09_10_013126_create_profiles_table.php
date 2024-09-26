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
        Schema::create('profiles', function (Blueprint $table) {
            $table->comment('Tabel Profil Pengguna');
            $table->id();
            $table->foreignId('user_id');
            $table->string('phone')->nullable();
            $table->enum('gender', ['L', 'P'])->nullable()->comment('L = Laki-Laki & P = Perempuan');
            $table->string('address')->nullable();
            $table->date('date_born')->nullable();
            $table->string('identity_number')->nullable()->comment('NIK.NPWP,No PASSPOR DLL');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
