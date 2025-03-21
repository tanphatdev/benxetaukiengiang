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
        Schema::create('webinfos', function (Blueprint $table) {
            $table->id('webinfo_id');
            $table->string('webinfo_name');
            $table->string('webinfo_email');
            $table->string('webinfo_sdt');
            $table->string('webinfo_diachi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinfos');
    }
};
