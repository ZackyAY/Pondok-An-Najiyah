<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('th_ajaran', 10);
            $table->date('tgl_daftar');
            $table->string('nm_peserta', 255);
            $table->string('jk', 10);
            $table->string('tmp_lahir', 255);
            $table->date('tgl_lahir');
            $table->text('almt_peserta');
            $table->string('image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
