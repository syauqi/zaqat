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
        Schema::create('jumlah_zakat', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_beras')->nullable();
            $table->integer('jumlah_uang')->nullable();
            $table->integer('total_beras')->nullable();
            $table->integer('total_uang')->nullable();
            $table->integer('total_distribusi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_zakat');
    }
};
