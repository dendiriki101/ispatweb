<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('option');
            $table->string('about');
            $table->string('name');
            $table->string('company');
            $table->string('email');
            $table->string('telphone');
            $table->text('massage');
            $table->string('country');
            $table->string('location');
            $table->string('issue')->nullable();
            $table->string('type')->nullable();
            $table->string('grade1')->nullable();
            $table->string('grade2')->nullable();
            $table->string('grade3')->nullable();
            $table->string('size')->nullable();
            $table->string('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
