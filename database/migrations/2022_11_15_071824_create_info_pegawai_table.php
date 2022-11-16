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
        Schema::create('info_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai');
            $table->string('id_posisi');
            $table->string('id_golongan');
            $table->string('id_unit_kerja');
            $table->string('alokasi_cuti');
            $table->string('sisa_cuti');
            $table->string('proyek_dikerjakan');
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
        Schema::dropIfExists('info_pegawai');
    }
};
