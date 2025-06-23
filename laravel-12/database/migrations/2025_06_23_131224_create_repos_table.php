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
     Schema::create('repos', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('abstrak');
        $table->string('file_pdf'); // This will store the path to the PDF file
        $table->integer('tahun');
        $table->string('jenis_karya');
        $table->json('penulis');
        $table->json('kata_kunci');
        $table->timestamps();
        // $table->json('penulis'); // Store as JSON array for multiple input

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repos');
    }
};
