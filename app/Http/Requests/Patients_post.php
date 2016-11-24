<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Patients_post extends FormRequest
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
            'ccc_number' => 'required',
            'first_name' => 'required',
            'phone_number' => 'required',
            'physical_address' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'enrollment_date' => 'required',

        ];
    }
}
