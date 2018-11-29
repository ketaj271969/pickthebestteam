<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request
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
            //
            'name'=>'required',
            'firstname'=>'required',
            'middleinitial'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'userrole'=>'required',
            'is_active'=>'required',
            'age'=>'required',
            'password'=>'required'
        ];
    }
}
