<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku', compact('bukus'));
    }

    public function store(Request $request)
{
    // Validate input
    $validatedData = $request->validate([
        'no_buku' => 'required|unique:bukus,no_buku',
        'judul' => 'required',
        'pengarang' => 'required',
        'jenis_buku' => 'required',
    ]);

    // If validation passes, insert the data
    Buku::create([
        'no_buku' => $request->no_buku,
        'judul' => $request->judul,
        'pengarang' => $request->pengarang,
        'jenis_buku' => $request->jenis_buku,
    ]);

    return redirect()->route('buku.index');
}

}

