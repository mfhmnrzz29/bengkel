<?php

namespace App\Http\Controllers;

use App\Penjualan;
use App\Pelanggan;
use App\Barang;
use App\Jasa;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penjualan = Penjualan::orderBy('created_at','desc')->get();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = Barang::all();
        $jasa = Jasa::all();
        $pelanggan = Pelanggan::all();
        return view('penjualan.create', compact('barang', 'jasa', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->validate($request, $this->rules);
        $penjualan = new Penjualan;
        
        $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->id_barang = $request->id_barang;
        $penjualan->id_jasa = $request->id_jasa;
        $penjualan->id_karyawan = $request->id_karyawan;
        $penjualan->jumlah = $request->jumlah;

        
        

        if ($request->id_jasa==null) {
            $barang = Barang::findOrFail($penjualan->id_barang);
        $penjualan->total_harga = $barang->harga_barang * $request->jumlah;
        $penjualan->save();
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;    
        $barang->save();
        }

        else if ($request->id_barang==null) {
            $jasa = Jasa::findOrFail($penjualan->id_jasa);
        $penjualan->total_harga = $jasa->harga;
        $penjualan->save();
        }

        else{
            $barang = Barang::findOrFail($penjualan->id_barang);
            $jasa = Jasa::findOrFail($penjualan->id_jasa);
        $penjualan->total_harga = ($barang->harga_barang * $request->jumlah) + $jasa->harga;
        $penjualan->save();
   
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;    
        $barang->save();
}

        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barang = Barang::all();
        $jasa = Jasa::all();
        $pelanggan = Pelanggan::all();
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.show', compact('barang', 'jasa', 'pelanggan', 'penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang = Barang::all();
        $jasa = Jasa::all();
        $pelanggan = Pelanggan::all();
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('barang', 'jasa', 'pelanggan', 'penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $this->validate($request, $this->rules);
        $penjualan = Penjualan::findOrFail($id);
        
       $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->id_barang = $request->id_barang;
        $penjualan->id_jasa = $request->id_jasa;
        $penjualan->id_karyawan = $request->id_karyawan;
        $penjualan->jumlah = $request->jumlah;

        
        

        if ($request->id_jasa==null) {
            $barang = Barang::findOrFail($penjualan->id_barang);
        $penjualan->total_harga = $barang->harga_barang * $request->jumlah;
        $penjualan->save();
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;    
        $barang->save();
        }

        else if ($request->id_barang==null) {
            $jasa = Jasa::findOrFail($penjualan->id_jasa);
        $penjualan->total_harga = $jasa->harga;
        $penjualan->save();
        }

        else{
            $barang = Barang::findOrFail($penjualan->id_barang);
            $jasa = Jasa::findOrFail($penjualan->id_jasa);
        $penjualan->total_harga = ($barang->harga_barang * $request->jumlah) + $jasa->harga;
        $penjualan->save();
   
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;    
        $barang->save();
    }
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect('penjualan');
    }
}
