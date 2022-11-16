<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_tunjangan', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai');
            $table->string('id_tunjangan');
            $table->string('nilai_satuan_tunjangan');
            $table->string('keterangan');
            $table->date('periode_awal_tunjangan');
            $table->date('periode_akhir_tunjangan');
            $table->string('total_nilai_tunjangan');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_tunjangan');
    }
};
