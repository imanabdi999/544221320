<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table_buku.index')->with([
            'table_buku' => Buku::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table_buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Judul'=>'required',
        //     'Pengarang'=>'required',
        //     'Penerbit'=>'required',
        //     'Tahun_Terbit'=>'required',
        //     'Harga'=>'required',
        //     'Jumlah_Stok'=>'required',
        //     'Kategori'=>'Novel'
        // ]);

        $table_buku = new Buku();
        $table_buku->Judul = $request->Judul;
        $table_buku->Pengarang = $request->Pengarang;
        $table_buku->Penerbit = $request->Penerbit;
        $table_buku->Tahun_Terbit = $request->Tahun_Terbit;
        $table_buku->Harga = $request->Harga;
        $table_buku->Jumlah_Stok = $request->Jumlah_Stok;
        $table_buku->Kategori = $request->Kategori;
        $table_buku->save();

        return to_route('table_buku.index')->with('success','Data berhasil ditambah.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('table_buku.edit')->with([
            'table_buku' => Buku::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'Judul'=>'required',
        //     'Pengarang'=>'required',
        //     'Penerbit'=>'required',
        //     'Tahun_Terbit'=>'required',
        //     'Harga'=>'required',
        //     'Jumlah_Stok'=>'required',
        //     'Kategori'=>'Novel'
        // ]);

        $table_buku = Buku::find($id);
        $table_buku->Judul = $request->Judul;
        $table_buku->Pengarang = $request->Pengarang;
        $table_buku->Penerbit = $request->Penerbit;
        $table_buku->Tahun_Terbit = $request->Tahun_Terbit;
        $table_buku->Harga = $request->Harga;
        $table_buku->Jumlah_Stok = $request->Jumlah_Stok;
        $table_buku->Kategori = $request->Kategori;
        $table_buku->save();

        return to_route('table_buku.index')->with('success','Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table_buku = Buku::find($id);
        $table_buku->delete();

        return back()->with('success', 'data berhasil dihapus.');
    }
}
