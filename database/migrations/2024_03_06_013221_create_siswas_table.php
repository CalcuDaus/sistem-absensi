<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama');
            $table->enum('gelombang', ['1', '2']);
            $table->foreignId('id_instruktur')->constrained('instruktur');
            $table->foreignId('id_sekolah')->constrained('sekolah');
            $table->foreignId('id_jurusan')->constrained('jurusan');
            $table->foreignId('id_periode')->constrained('periode');
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
        Schema::dropIfExists('siswa');
    }
}
