<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name' => 'required',
            'email'=>'required',
            'enrollment_number'=>'required|numeric',
            'branch' => 'required',
            'sem'=>'required',
            'password' =>'required',
            'contact_number'=>'required|numeric'
        ];
    }
}
