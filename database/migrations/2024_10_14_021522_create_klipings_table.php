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
        Schema::create('kliping', function (Blueprint $table) {
            $table->id();
            $table->integer('idprodi');
            $table->string('judul');
            $table->date('tanggal');
            $table->text('isi');
            $table->string('url');
            $table->boolean('tampil');
            $table->string('label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kliping');
    }
};
