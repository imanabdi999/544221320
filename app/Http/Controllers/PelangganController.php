<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table_pelanggan.index')->with([
            'table_pelanggan' => Pelanggan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table_pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table_pelanggan = new Pelanggan();
        $table_pelanggan->Nama_Pelanggan = $request->Nama_Pelanggan;
        $table_pelanggan->Alamat = $request->Alamat;
        $table_pelanggan->Nomor_Telepon = $request->Nomor_Telepon;
        $table_pelanggan->save();

        return to_route('table_pelanggan.index')->with('success','Data berhasil ditambah.');

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
        return view('table_pelanggan.edit')->with([
            'table_pelanggan' => Pelanggan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $table_pelanggan = Pelanggan::find($id);
        $table_pelanggan->Nama_Pelanggan = $request->Nama_Pelanggan;
        $table_pelanggan->Alamat = $request->Alamat;
        $table_pelanggan->Nomor_Telepon = $request->Nomor_Telepon;
        $table_pelanggan->save();

        return to_route('table_pelanggan.index')->with('success','Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table_pelanggan = Pelanggan::find($id);
        $table_pelanggan->delete();

        return back()->with('success', 'data berhasil dihapus.');
    }
}
