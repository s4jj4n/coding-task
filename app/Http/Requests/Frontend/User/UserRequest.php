<?php

namespace App\Http\Requests\Frontend\User;

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
            'phone' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required|date'
        ];
    }
}
