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
        Schema::create('chitiettuyens', function (Blueprint $table) {
            $table->id('chitiettuyen_id');
            $table->string('tuyen_id');
            $table->string('donvikinhdoanh_id')->nullable();
            $table->string('chitiettuyen_hanhtrinh')->nullable();
            $table->string('chitiettuyen_ghichu')->nullable();
            $table->string('chitiettuyen_giave')->nullable();
            $table->string('chitiettuyen_trangthai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiettuyens');
    }
};
