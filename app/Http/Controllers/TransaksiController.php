<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel transaksis
        $transaksis = Transaksi::all();

        // Kirim data ke view transaksi
        return view('transaksi', compact('transaksis'));
    }
}
