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
        Schema::create('master_akses', function (Blueprint $table) {
            $table->id();
            $table->string('id_menu');
            $table->string('id_peran');
            $table->string('akses_lihat');
            $table->string('akses_tambah');
            $table->string('akses_hapus');
            $table->string('akses_setujui');
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
        Schema::dropIfExists('master_akses');
    }
};
