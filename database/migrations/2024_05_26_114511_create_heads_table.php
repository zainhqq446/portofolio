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
        Schema::create('heads', function (Blueprint $table) {
            $table->id();
            $table->string('nav1');
            $table->string('nav2');
            $table->string('nav3');
            $table->string('nav4');
            $table->string('nav5');
            $table->longText('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heads');
    }
};
