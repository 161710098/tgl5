<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_kelas')->unsigned();
            $table->string('nama_siswa');
            $table->string('nis')-> unique();
            $table->text('alamat');
            $table->string('no_hp');
            $table->timestamps();

             $table->foreign('id_kelas')->references('id')->on('kelas')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}