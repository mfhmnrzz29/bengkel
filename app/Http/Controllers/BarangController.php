<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pembelian;
use App\Supplier;
use Session;
use App\Http\Requests\BarangRequest;
use Illuminate\Http\Request;
use Input;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $barang = Barang::with('Pembelian')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = Supplier::all();
        return view('barang.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //     $barang = new Barang();
    //     $barang->kode_barang = $request->kode_barang;
    //     $barang->nama_barang = $request->nama_barang;
    //     $barang->jumlah_barang = $request->jumlah_barang;
    //     $barang->harga_beli = $request->harga_beli;
    //     $barang->harga_jual = $request->harga_jual;
    //     $barang->satuan = $request->satuan;

    //     if($request->harga_jual<$request->harga_beli){
    //         Session::flash("flash_notification",[
    //             "level"=>"danger",
    //             "message"=>"Harga jual tidak bisa kurang dari harga beli!"]);
    //         return redirect('barang/create');
    //     }
    //     else{    
    //     $barang->save();
    // }

    //     $pembelian = new Pembelian();
    //     $pembelian->id_supplier = $request->id_supplier;
    //     $pembelian->id_barang = $barang->id_barang;
    //     $pembelian->jumlah = $request->jumlah_barang;
    //     $pembelian->total_harga = $request->harga_beli * $request->jumlah_barang;
    //     $pembelian->save();

        for($id = 0; $id < count($request->kode_barang); $id++){
                $barang = new Barang();
                $barang->kode_barang = $request->kode_barang[$id];
                $barang->nama_barang = $request->nama_barang[$id];
                $barang->jumlah_barang = $request->jumlah_barang[$id];
                $barang->harga_beli = $request->harga_beli[$id];
                $barang->harga_jual = $request->harga_jual[$id];
                $barang->satuan = $request->satuan[$id];

                if($request->harga_jual[$id]<$request->harga_beli[$id]){
                Session::flash("flash_notification",[
                "level"=>"danger",
                "message"=>"Harga jual tidak bisa kurang dari harga beli!"]);
            return redirect('barang/create');
        }
        else{    
        $barang->save();
    }            
                $pembelian = new Pembelian();
                $pembelian->id_supplier = $request->id_supplier[$id];
                $pembelian->id_barang = $barang->id;
                $pembelian->jumlah = $request->jumlah_barang[$id];
                $pembelian->total_harga = $request->harga_beli[$id] * $request->jumlah_barang[$id];
                $pembelian->save();
                
            }          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_beli = $request->harga_beli;
        $barang->harga_jual = $request->harga_jual;
        $barang->satuan = $request->satuan;
        $barang->save();
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('barang');
    }
}
