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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('paragraf');
            $table->string('judul1');
            $table->string('isi1');
            $table->string('judul2');
            $table->string('isi2');
            $table->string('judul3');
            $table->string('isi3');
            $table->string('judul4');
            $table->string('isi4');
            $table->string('judul5');
            $table->string('isi5');
            $table->string('judul6');
            $table->string('isi6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
