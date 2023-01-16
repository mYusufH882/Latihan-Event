<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'nama' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Input :attribute tidak boleh kosong!'
        ];
    }
}
