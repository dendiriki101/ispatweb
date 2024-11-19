<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelelangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelelang', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->unsignedBigInteger('no_lelang'); // Kolom no_lelang sebagai relasi ke tabel lelang
            $table->unsignedBigInteger('id_buyer'); // Kolom id_buyer sebagai relasi ke tabel buyer
            $table->integer('penawaran'); // Kolom penawaran untuk menyimpan jumlah penawaran
            $table->string('status')->default('aktif'); // Kolom status dengan default 'aktif'
            $table->string('type');
            $table->timestamps(); // Kolom created_at dan updated_at

            // Mendefinisikan relasi ke tabel lelang dan buyer
            $table->foreign('no_lelang')->references('id')->on('lelang')->onDelete('cascade');
            $table->foreign('id_buyer')->references('id')->on('buyers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelelang');
    }
}
