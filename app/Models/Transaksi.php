<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'transaksis';

    // Kolom yang boleh diisi
    protected $fillable = ['no_pinjaman', 'nama', 'id_anggota', 'no_buku', 'tgl_pinjam', 'tgl_kembali'];
}
