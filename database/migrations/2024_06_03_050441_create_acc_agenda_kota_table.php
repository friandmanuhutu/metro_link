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
            $table->string('username'); // Username of the user who submitted the data
            $table->string('Nama_Penyelenggara'); // Nama Penyelenggara
            $table->string('Nama_Event'); // Nama Event
            $table->string('kategori'); // Kategori Event
            $table->text('Deskripsi_Event'); // Deskripsi Event
            $table->date('Tanggal_Pelaksanaan'); // Tanggal Pelaksanaan
            $table->timestamps(); // Created at and Updated at timestamps
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
