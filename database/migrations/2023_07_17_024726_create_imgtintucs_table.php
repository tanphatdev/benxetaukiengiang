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
        Schema::create('imgtintucs', function (Blueprint $table) {
            $table->id('imgtintuc_id');
            $table->string('imgtintuc_name');
            $table->string('imgtintuc_link');
            $table->string('tintuc_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imgtintucs');
    }
};
