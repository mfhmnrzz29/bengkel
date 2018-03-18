<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'nama' => 'required|unique:suppliers',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric|unique:suppliers',
        ];
    }

    public function messages(){
        return[
            'nama.required' => 'Nama Supplier Tidak Boleh Kosong',
            'nama.unique' => 'Nama Supplier Sudah Ada',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'no_telepon.required' => 'Nomor Telepon Tidak Boleh Kosong',
            'no_telepon.numeric' => 'Nomor Telepon Harus Berupa Angka',
            'no_telepon.unique' => 'Nomor Telepon Sudah Terpakai',
        ];
    }
}