<?php

namespace App\Http\Controllers;

use App\Pembelian;
use App\Barang;
use App\Supplier;
use App\Http\Requests\PembelianRequest;
use Input;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $pembelian = Pembelian::all();
        return view('pembelian.index', compact('pembelian'));
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
        $supplier = Supplier::all();
        return view('pembelian.create', compact('barang', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PembelianRequest $request)
    {
        //
        
        // return $request->all();
        // $pembelian = new Pembelian;
        // $pembelian->id_barang = $request->id_barang;
        // $pembelian->id_supplier = $request->id_supplier;
        // $pembelian->jumlah = $request->jumlah;
    
        // $barang = Barang::findOrFail($pembelian->id_barang);
        // $barang->jumlah_barang = $barang->jumlah_barang + $request->jumlah;
        // $pembelian->total_harga = $request->jumlah * $barang->harga_beli;    
        // $barang->save();
        // $pembelian->save();

        for($id = 0; $id < count($request->id_barang); $id++){
                $pembelian = new Pembelian;
                $pembelian->id_barang = $request->id_barang[$id];
                $pembelian->id_supplier = $request->id_supplier[$id];
                $pembelian->jumlah = $request->jumlah[$id];
            
                $barang = Barang::findOrFail($request->id_barang[$id]);
                $barang->jumlah_barang = $barang->jumlah_barang + $request->jumlah[$id];
                $pembelian->total_harga = $request->jumlah[$id] * $barang->harga_beli;    
                $barang->save();
                $pembelian->save();
                
            }

        return redirect('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pembelian = Pembelian::findOrFail($id);
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('pembelian.show', compact('pembelian','barang', 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pembelian = Pembelian::findOrFail($id);
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('pembelian.edit', compact('pembelian','barang', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(PembelianRequest $request, $id)
    {
        //
        
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->id_barang = $request->id_barang;
        $pembelian->id_supplier = $request->id_supplier;
        $pembelian->harga = $request->harga;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->total_harga = $request->jumlah * $request->harga;
        $pembelian->save();
        return redirect('pembelian');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();
        return redirect('pembelian');
    }
}
