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
        Schema::create('bens', function (Blueprint $table) {
            $table->id('ben_id');
            $table->string('ben_ten')->nullable();
            $table->string('ben_diachi')->nullable();
            $table->string('ben_sodienthoai')->nullable();
            $table->string('ben_email')->nullable();
            $table->string('loaiben_id')->nullable();
            $table->string('ben_phancap')->nullable();
            $table->string('ben_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bens');
    }
};
