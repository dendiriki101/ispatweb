<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangTable extends Migration
{
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('title'); // Kolom title
            $table->text('description'); // Kolom description
            $table->string('uom'); // Kolom uom
            $table->text('content');
            $table->string('links');
            $table->string('picture');
            $table->string('limbah'); // Kolom limbah
            $table->string('buyer'); // Kolom buyer
            $table->string('status'); // Kolom status
            $table->string('created_by');
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('lelang');
    }
}
