<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JasaRequest extends FormRequest
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
            'nama' => 'required|unique:jasas',
            'harga' => 'required|integer',
        ];
    }

    public function messages(){
        return[
            'nama.required' => 'Jenis Jasa Tidak Boleh Kosong',
            'nama.unique' => 'Jenis Jasa Sudah Ada',
            'harga.required' => 'Harga Tidak Boleh Kosong',
            'harga.integer' => 'Harga Harus Berupa Angka',
            ];
    }
}
