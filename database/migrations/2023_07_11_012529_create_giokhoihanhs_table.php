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
        Schema::create('giokhoihanhs', function (Blueprint $table) {
            $table->id('giokhoihanh_id');
            $table->string('chitiettuyen_id');
            $table->string('giokhoihanh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giokhoihanhs');
    }
};
