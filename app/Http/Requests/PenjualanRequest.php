<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jumlah' => 'required|integer|unsigned'
        ];
    }

     public function messages(){
        return[
            'jumlah.required' => 'Jumlah Barang Tidak Boleh Kosong',
            'jumlah.integer' => 'Jumlah Barang Harus Diisi Menggunakan Angka'
            'jumlah.unsigned' => 'Jumlah Pesanan Melebihi Stok'
        ];
}
}
