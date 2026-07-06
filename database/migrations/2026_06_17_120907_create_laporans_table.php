<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {

            $table->id();

            $table->string('nama_pelapor');

            $table->string('judul');

            $table->text('isi_laporan');

            $table->string('lokasi');

            $table->string('status')
                ->default('Menunggu');

            $table->string('foto')
                ->nullable();

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};