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
        Schema::create('daftar_peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->date('tanggal_lahir');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('jenis_lomba');
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
        Schema::dropIfExists('daftar_peserta_models');
    }
};
