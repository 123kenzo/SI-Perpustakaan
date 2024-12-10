<?php

namespace App\Http\Controllers;

use App\Models\Anggota; // Model Anggota
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Menampilkan semua anggota
    public function index()
    {
        // Mengambil semua data dari tabel anggotas
        $anggotas = Anggota::all();

        // Mengirim data ke view anggota.blade.php
        return view('anggota', compact('anggotas'));
    }

    // Menyimpan anggota baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
            'tgl_lahir' => 'required|date',
        ]);

        // Menyimpan data ke database
        Anggota::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        // Redirect kembali ke halaman anggota dengan pesan sukses
        return redirect('/anggota')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    // Menampilkan halaman edit anggota
    public function edit($id)
    {
        // Mencari anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);

        // Mengirim data anggota ke view edit
        return view('edit-anggota', compact('anggota'));
    }

    // Mengupdate data anggota
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
            'tgl_lahir' => 'required|date',
        ]);

        $anggota = Anggota::findOrFail($id);

        $anggota->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/anggota')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Mencari anggota berdasarkan ID dan menghapusnya
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        // Redirect kembali ke halaman anggota dengan pesan sukses
        return redirect('/anggota')->with('success', 'Data anggota berhasil dihapus.');
    }
}
