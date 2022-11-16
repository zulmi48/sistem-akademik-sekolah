<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nik' => 'required|min:8|max:8|numeric|unique',
            'nama' => 'required|min:3|max:30|regex:/^[a-zA-Z ]*$/',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:5'
        ];
    }

    public function attributes()
    {
        return [
            'nik' => 'NIK',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat'
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attribute wajib diisi!",
            'unique' => ":attribute sudah ada dalam database!",
            'numeric' => ":attribute wajib menggunakan angka!",
            'regex' => ":attribute hanya bisa menggunakan huruf alphabet dan spasi!",
            'min' => ":attribute minimal :min karakter!",
            'max' => ":attribute maksimal :max karakter!"
        ];
    }
}
