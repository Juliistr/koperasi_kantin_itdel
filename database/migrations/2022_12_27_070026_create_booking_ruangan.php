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
        Schema::create('booking_ruangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ruangan_id");
            $table->foreignId("user_id");
            $table->string("deskripsi");
            $table->date("tanggal_awal_peminjaman");
            $table->date("tanggal_akhir_peminjaman");
            $table->string("status");
            $table->timestamps();
            $table->foreign('ruangan_id')->references('id')->on('ruangan')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_ruangan');
    }
};
