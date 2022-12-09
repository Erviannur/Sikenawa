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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('idPengaduan');
            $table->string('name');
            $table->string('nomer');
            $table->string('email');
            $table->date('tanggal');
            $table->unsignedBigInteger('idLokasi');
            $table->string('keterangan');
            $table->timestamps();
            $table->foreign('idLokasi')
                 ->references('idLokasi')
                 ->on('lokasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
