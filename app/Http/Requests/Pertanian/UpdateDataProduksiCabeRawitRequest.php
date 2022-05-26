<?php

namespace App\Http\Requests\Pertanian;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Pertanian\DataProduksiCabeRawit;

class UpdateDataProduksiCabeRawitRequest extends FormRequest
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
        $rules = DataProduksiCabeRawit::$rules;
        
        return $rules;
    }
}
