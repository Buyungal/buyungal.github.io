<?php

namespace App\Http\Requests\Pendidikan;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Pendidikan\DataSMK;

class UpdateDataSMKRequest extends FormRequest
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
        $rules = DataSMK::$rules;
        
        return $rules;
    }
}
