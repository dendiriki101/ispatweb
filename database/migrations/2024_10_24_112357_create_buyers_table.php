<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('npwp')->unique(); // NPWP harus unik
            $table->string('nomor_telepon');
            $table->string('email')->unique(); // Email harus unik
            $table->string('status')->default('aktif'); // Status dengan default 'aktif'
            $table->string('bank');
            $table->string('no_rek');
            $table->string('atas_nama');
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
