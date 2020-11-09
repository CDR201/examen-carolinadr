<?php

namespace App\Http\Requests;
use app\productos;
use Illuminate\Foundation\Http\FormRequest;

class Rpeoductos extends FormRequest
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
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ];
    }
}
