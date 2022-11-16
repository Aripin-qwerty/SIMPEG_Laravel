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
        Schema::create('master_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('NIP')->unique();
            $table->string('nama_pegawai');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('KTP');
            $table->string('NPWP');
            $table->string('BPJS');
            $table->string('riwayat_pendidikan');
            $table->string('riwayat_pekerjaan');
            $table->string('email_individu');
            $table->string('email_perusahaan');
            $table->string('nomor_telepon1');
            $table->string('nomor_telepon2');
            $table->string('nomor_telepon3');
            $table->string('status_kawin');
            $table->string('status_aktif');
            $table->string('status_karyawan');
            $table->date('tanggal_bergabung');
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
        Schema::dropIfExists('master_pegawai');
    }
};
