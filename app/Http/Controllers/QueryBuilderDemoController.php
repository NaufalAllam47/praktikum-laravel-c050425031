<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();
        return view('demo.statistik-prodi', compact('rekap'));
    }

    
    public function formTambah()
    {
        return view('demo.form-mahasiswa');
    }

    public function simpan(Request $request)
    {
        $request->validate([
        'nama' => 'required|string|max:255',
        'prodi' => 'required|string|max:255',
        'semester' => 'required|integer|min:1',
    ]);

    DB::table('mahasiswas')->insert([
        'nama' => $request->nama,
        'prodi' => $request->prodi,
        'semester' => $request->semester,
    ]);

    return redirect('/demo/query-builder')
        ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        DB::table('mahasiswas')
        ->where('id', $id)
        ->update(['semester' => 4]);

        return redirect('/demo/query-builder')
        ->with('success', 'Data mahasiswa berhasil diubah.');
    }

    public function hapus($id)
    {
        DB::table('mahasiswas')
        ->where('id', $id)
        ->delete();

        return redirect('/demo/query-builder')
        ->with('success', 'Data mahasiswa berhasil dihapus.');
    }

}
