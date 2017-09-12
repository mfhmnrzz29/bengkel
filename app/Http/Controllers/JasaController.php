<?php

namespace App\Http\Controllers;

use App\Jasa;
use Illuminate\Http\Request;
use Input;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
        'nama' => ['required','unique:jasas'],
        'harga' =>['required','integer'],
    ];

    public function index()
    {
        //
        $jasa = Jasa::all();
        return view('jasa.index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jasa.create');
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
        $this->validate($request, [
        'nama' => ['required','unique:jasas'],
        'harga' =>['required','integer'],
    ]);
        $jasa = new Jasa();
        $jasa->nama = $request->nama;
        $jasa->harga = $request->harga;
        $jasa->save();
        return redirect('jasa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jasa = Jasa::findOrFail($id);
        return view('jasa.show', compact('jasa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jasa = Jasa::findOrFail($id);
        return view('jasa.edit', compact('jasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
        'nama' => ['required'],
        'harga' =>['required','integer'],
    ]);
        $jasa = Jasa::findOrFail($id);
        $jasa->nama = $request->nama;
        $jasa->harga = $request->harga;
        $jasa->save();
        return redirect('jasa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jasa = Jasa::findOrFail($id);
        $jasa->delete();
        return redirect('jasa');
    }
}
