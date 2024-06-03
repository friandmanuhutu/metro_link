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
        Schema::create('acc_agenda_kota', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('Nama_Penyelenggara');
            $table->string('Nama_Event');
            $table->string('kategori');
            $table->text('Deskripsi_Event');
            $table->date('Tanggal_Pelaksanaan');
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
        Schema::dropIfExists('acc_agenda_kota');
    }
};
