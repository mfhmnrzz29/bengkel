<?php


namespace App\Http\Controllers;

use App\Penjualan;
use App\Barang;
use App\Jasa;
use Session;
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
        return view('penjualan.create', compact('barang', 'jasa'));
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
//         $penjualan = new Penjualan;
        
//         $penjualan->id_barang = $request->id_barang;
//         $penjualan->id_jasa = $request->id_jasa;
//         $penjualan->id_karyawan = $request->id_karyawan;
//         $penjualan->jumlah = $request->jumlah;


//         if ($request->id_jasa==null) {
//             $barang = Barang::findOrFail($penjualan->id_barang);
//         $penjualan->total_harga = $barang->harga_jual * $request->jumlah;
//         $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah;
//         if($barang->jumlah_barang < 0){
//              Session::flash("flash_notification",[
//                 "level"=>"danger",
//                 "message"=>"Peringatan! Jumlah pesanan melebihi stok yang tersedia!"]);
//             return redirect('penjualan/create');
//         }
//         else{    
//         $barang->save();
//         $penjualan->save();
//         }
//         }

//         else if ($request->id_barang==null) {
//             $jasa = Jasa::findOrFail($penjualan->id_jasa);
//         $penjualan->total_harga = $jasa->harga;
//         $penjualan->save();
//         }

//         else if ($request->id_jasa!=null && $request->id_barang!=null){
//             $barang = Barang::findOrFail($penjualan->id_barang);
//             $jasa = Jasa::findOrFail($penjualan->id_jasa);
//         $penjualan->total_harga = ($barang->harga_jual * $request->jumlah) + $jasa->harga;   
//         $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah; 

//         if($barang->jumlah_barang < 0){
//             Session::flash("flash_notification",[
//                 "level"=>"danger",
//                 "message"=>"Peringatan! Jumlah pesanan melebihi stok yang tersedia!"]);
//             return redirect('barang/create');
//         }
//          else{    
//         $barang->save();
//         $penjualan->save();
//         }


// }
        for($id = 0; $id < count($request->id_barang); $id++){
                $penjualan = new Penjualan;
                $penjualan->id_barang = $request->id_barang[$id];
                $penjualan->id_jasa = $request->id_jasa;
                $penjualan->id_karyawan = $request->id_karyawan;
                            
            

            if ($request->id_jasa==null) {
            $barang = Barang::findOrFail($request->id_barang[$id]);
            $penjualan->jumlah = $request->jumlah[$id];
            $penjualan->total_harga = $barang->harga_jual * $request->jumlah[$id];
            $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah[$id];
        if($barang->jumlah_barang < 0){
             Session::flash("flash_notification",[
                "level"=>"danger",
                "message"=>"Peringatan! Jumlah pesanan melebihi stok yang tersedia!"]);
            return redirect('penjualan/create');
        }
        else{    
        $barang->save();
        $penjualan->save();
        }
        }

        else if ($request->id_barang==null) {
        $jasa = Jasa::findOrFail($penjualan->id_jasa);
        $penjualan->jumlah = 0;
        $penjualan->total_harga = $jasa->harga;
        $penjualan->save();
        }

        else if ($request->id_jasa!=null && $request->id_barang!=null){
            $barang = Barang::findOrFail($request->id_barang[$id]);
                $jasa = Jasa::findOrFail($penjualan->id_jasa);
                $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah[$id];
                $penjualan->jumlah = $request->jumlah[$id];
                $penjualan->total_harga = ($barang->harga_jual * $request->jumlah[$id]) + $jasa->harga; 

                if($barang->jumlah_barang < 0){
            Session::flash("flash_notification",[
                 "level"=>"danger",
                 "message"=>"Peringatan! Jumlah pesanan melebihi stok yang tersedia!"]);
             return redirect('penjualan/create');
        }  
        $barang->save();
        $penjualan->save();
    }
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
        // $barang = Barang::all();
        // $jasa = Jasa::all();
        // $pelanggan = Pelanggan::all();
        // $penjualan = Penjualan::findOrFail($id);
        // return view('penjualan.show', compact('barang', 'jasa', 'pelanggan', 'penjualan'));
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
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('barang', 'jasa', 'penjualan'));
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
   
        $barang->jumlah_barang = $barang->jumlah_barang + $request->jumlah;    
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
