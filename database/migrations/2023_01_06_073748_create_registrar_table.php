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
        Schema::create('registrar', function (Blueprint $table) {
            $table->id();
            $table->integer('id_daftar');
            $table->string('emailMhs');
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->string('tipeBeasiswa');
            $table->string('emailPribadi');
            $table->string('noHp');
            $table->date('tanggalLahir');
            $table->string('ipk');
            $table->text('tempatTinggal');
            $table->text('ktm');
            $table->text('ktp');
            $table->text('transkrip');
            $table->text('suratPernyataan');
            $table->text('lainnya');

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
        Schema::dropIfExists('registrar');
    }
};
