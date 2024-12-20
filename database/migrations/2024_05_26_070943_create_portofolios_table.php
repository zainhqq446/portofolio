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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('paragraf');
            $table->string('kerja1');
            $table->string('kerja2');
            $table->string('kerja3');
            $table->longText('gambar');
            $table->longText('gambar1');
            $table->longText('gambar2');
            $table->longText('gambar3');
            $table->longText('gambar4');
            $table->longText('gambar5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
