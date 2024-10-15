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
        DB::statement("
        CREATE VIEW viewkliping AS
        SELECT DISTINCT
        kliping.id,
        prodi.nama AS namaprodi,
        kliping.judul,
        kliping.tanggal,
        kliping.isi,
        kliping.url,
        kliping.tampil,
        kliping.label,
        kliping.created_at,
        kliping.updated_at
        FROM
        prodi
        INNER JOIN
        kliping
        ON
        prodi.id = kliping.idprodi
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
