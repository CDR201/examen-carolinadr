<?php

namespace App\Http\Requests;
use app\facturas;

use Illuminate\Foundation\Http\FormRequest;

class Rfacturas extends FormRequest
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
            'fecha' => 'required',
            'clientes_id' => 'required',
        ];
    }
}
