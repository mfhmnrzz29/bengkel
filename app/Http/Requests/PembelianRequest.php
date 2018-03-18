<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembelianRequest extends FormRequest
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
            'id_barang' => 'required',
            'id_supplier' => 'required',
            'jumlah' => 'required',
        ];
    }

    public function messages(){
        return[
            'id_barang.required' => 'Nama Barang Tidak Boleh Kosong',
            'id_supplier.required' => 'Nama Supplier Tidak Boleh Kosong',
            'jumlah.required' => 'Jumlah Barang Tidak Boleh Kosong',
        ];
}
}
