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
        Schema::create('master_menu', function (Blueprint $table) {
            $table->id();
            $table->string('id_menu');
            $table->string('nama_menu');
            $table->string('id_induk');
            $table->string('urutan');
            $table->string('url');
            $table->string('jenis_menu');
            $table->string('menu_icon');
            $table->string('nama_controller');
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
        Schema::dropIfExists('master_menu');
    }
};
