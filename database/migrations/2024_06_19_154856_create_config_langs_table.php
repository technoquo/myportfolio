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
        Schema::create('config_langs', function (Blueprint $table) {
            $table->id();
            $table->string('intro')->nullable();
            $table->string('intro_desc')->nullable();
            $table->string('phrase')->nullable();
            $table->string('skills')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_langs');
    }
};
