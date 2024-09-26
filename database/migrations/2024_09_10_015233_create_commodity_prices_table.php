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
        Schema::create('commodity_prices', function (Blueprint $table) {
            $table->comment('Tabel Harga Komoditas');
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('commodity_id');
            $table->foreignId('market_id');
            $table->date('date');
            $table->bigInteger('price')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
            $table->foreign('commodity_id')->references('id')->on('commodities')->cascadeOnDelete();
            $table->foreign('market_id')->references('id')->on('markets')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commodity_prices');
    }
};
