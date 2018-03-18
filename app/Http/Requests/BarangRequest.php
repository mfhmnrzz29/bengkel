<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required|unique:barangs',
            'jumlah_barang' => 'required|integer',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'satuan' => 'required'
        ];
    }

    public function messages(){
        return[
            'kode_barang.required' => 'Kode Barang Tidak Boleh Kosong',
            'kode_barang.unique' => 'Kode Barang Sudah Terpakai',
            'nama_barang.required' => 'Nama Barang Tidak Boleh Kosong',
            'nama_barang.unique' => 'Nama Barang Sudah Terpakai',
            'jumlah_barang.required' => 'Jumlah Barang Tidak Boleh Kosong',
            'jumlah_barang.integer' => 'Jumlah Barang Harus Berupa Angka',
            'harga_beli.required' => 'Harga Beli Tidak Boleh Kosong',
            'harga_beli.integer' => 'Harga Beli Harus Berupa Angka',
            'harga_jual.required' => 'Harga Jual Tidak Boleh Kosong',
            'harga_jual.integer' => 'Harga Jual Harus Berupa Angka',
            'satuan.required' => 'Satuan Tidak Boleh Kosong'
        ];
    }
}
