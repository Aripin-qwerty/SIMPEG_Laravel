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
        Schema::create('notifikasi_email', function (Blueprint $table) {
            $table->id();
            $table->string('subjek_pesan');
            $table->string('info_pesan');
            $table->string('penerima_pesan');
            $table->string('keterangan');
            $table->string('status_pesan');
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
        Schema::dropIfExists('notifikasi_email');
    }
};
