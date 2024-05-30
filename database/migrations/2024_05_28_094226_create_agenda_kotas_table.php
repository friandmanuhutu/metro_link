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
        Schema::create('agenda_kotas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('Nama_Penyelenggara'); // Nama Perusahaan
            $table->string('Nama_Event'); // Nama Event
            $table->string('kategori'); // Kategori Event
            $table->text('Deskripsi_Event'); // Deskripsi Event
            $table->date('Tanggal_Pelaksanaan'); // Tanggal Pelaksanaan
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_kotas');
    }
};
