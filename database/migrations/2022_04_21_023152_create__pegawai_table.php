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
        Schema::create('_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string("Nama");
            $table->string("Jabatan");
            $table->string("Umur");
            $table->string("jk");
            $table->string("Alamat");
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
        Schema::dropIfExists('_pegawai');
    }
};
