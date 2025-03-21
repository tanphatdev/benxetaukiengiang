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
        Schema::create('donvikinhdoanhs', function (Blueprint $table) {
            $table->id('donvikinhdoanh_id');
            $table->string('loaikinhdoanh_id');
            $table->string('donvikinhdoanh_ten')->nullable();
            $table->string('donvikinhdoanh_mst')->nullable();
            $table->string('donvikinhdoanh_tenviettat')->nullable();
            $table->string('donvikinhdoanh_diachi')->nullable();
            $table->string('donvikinhdoanh_sdt')->nullable();
            $table->string('donvikinhdoanh_ghichu')->nullable();
            $table->string('ben_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donvikinhdoanhs');
    }
};
