<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id('id'); // Primary key otomatis
            $table->string('no_buku', 20)->unique(); // Nomor buku (unik)
            $table->string('judul', 150); // Judul buku
            $table->string('pengarang', 100); // Nama pengarang buku
            $table->string('jenis_buku', 50); // Jenis buku
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus'); 
    }
}
