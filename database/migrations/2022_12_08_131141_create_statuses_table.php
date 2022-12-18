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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id('idStatus');
            $table->unsignedBigInteger('idPengaduan');
            $table->boolean('diterima')->nullable()->default(false);
            $table->boolean('menuju_lokasi')->nullable()->default(false);
            $table->boolean('selesai')->nullable()->default(false);
            $table->string('balasan');
            $table->date('tanggal');
            $table->timestamps();
            $table->foreign('idPengaduan')
                 ->references('idPengaduan')
                 ->on('pengaduans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
};
