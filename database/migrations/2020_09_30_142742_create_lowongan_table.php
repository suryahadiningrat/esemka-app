<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perusahaan');
            $table->bigInteger('id_interview');
            $table->bigInteger('id_soal')->nullable();
            $table->string('judul');
            $table->string('lokasi');
            $table->enum('tipe_pekerjaan',['Part Time','Full Time']);
            $table->string('gaji');
            $table->string('tags');
            $table->integer('kuota')->nullable();
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
        Schema::dropIfExists('lowongan');
    }
}
