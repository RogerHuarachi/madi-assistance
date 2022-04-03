<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'          => 'required | Min:5 unique:Users',
            'email'          => 'required | email | unique:Users',
            'password'          => 'required | Min:7 | Max:30',
            'office_id'          => 'required'
        ];
    }
}
