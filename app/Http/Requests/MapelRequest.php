<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapelRequest extends FormRequest
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
            'kode' => 'required|min:7|max:8',
            'nama' => 'required|min:5',
            'semester' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'semester' => 'Semester'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maksimal :max karakter!'
        ];
    }
}
