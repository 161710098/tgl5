<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_absen');
            $table->string('kelas');
            $table->unsignedInteger('id_keterangan');
            $table->unsignedInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas')->ondelete('cascade');
            $table->foreign('id_keterangan')->references('id')->on('keterangans')->ondelete('cascade');

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
        Schema::dropIfExists('absens');
    }
}