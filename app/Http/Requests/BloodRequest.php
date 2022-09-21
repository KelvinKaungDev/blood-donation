<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BloodRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'volume'      => 'required',
            'blood_type'  => 'required',
            'emergency'   => 'required',
            'hospital_id' => 'required'
        ];
    }
}
