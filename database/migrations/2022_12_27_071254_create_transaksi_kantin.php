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
        Schema::create('transaksi_kantin', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("produk_id");
            $table->integer("jumlah");
            $table->double("total_harga");
            $table->string("status");
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('produk_id')->references('id')->on('produk_kantin')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_kantin');
    }
};
