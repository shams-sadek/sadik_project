<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientRequest extends Request
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

        if(empty($this->date_of_birth)){
            $this->date_of_birth = date('d/m/Y');
        }

        return [
            'name'              => 'required',
            'date_of_birth'     => 'date_format:d/m/Y',
        ];
    }
}
