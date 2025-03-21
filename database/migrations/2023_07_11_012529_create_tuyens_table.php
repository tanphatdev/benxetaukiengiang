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
        Schema::create('tuyens', function (Blueprint $table) {
            $table->id('tuyen_id');
            $table->string('tuyen_matuyen')->nullable()->unique();
            $table->string('tuyen_ten')->nullable()->unique();
            $table->string('tuyen_bendi')->nullable();
            $table->string('tuyen_benden')->nullable();
            $table->string('tuyen_culy')->nullable();
            $table->string('loaikinhdoanh_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuyens');
    }
};
