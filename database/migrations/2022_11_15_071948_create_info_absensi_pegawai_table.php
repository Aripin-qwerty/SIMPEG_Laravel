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
        Schema::create('info_absensi_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai');
            $table->date('tanggal_absen');
            $table->string('jam_absen');
            $table->string('status_hadir');
            $table->string('lokasi_absen');
            $table->string('keterangan');
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
        Schema::dropIfExists('info_absensi_pegawai');
    }
};
