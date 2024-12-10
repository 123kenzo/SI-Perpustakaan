<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id(); // Primary key otomatis
            $table->string('No_Pinjaman', 20)->unique(); // Nomor pinjaman unik
            $table->string('Nama', 100); // Nama anggota
            $table->unsignedBigInteger('Id_anggota'); // Foreign key untuk anggota
            $table->string('no_buku', 20); // Foreign key untuk buku
            $table->date('tgl_pinjam'); // Tanggal pinjam
            $table->date('tgl_kembali'); // Tanggal kembali
            $table->timestamps(); 

            $table->foreign('Id_anggota')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('no_buku')->references('no_buku')->on('bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis'); 
    }
}
