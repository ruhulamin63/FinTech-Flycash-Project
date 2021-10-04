<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'name'=>'required|min:4|max:50',
            'email'=>'required|min:8|max:50',
            'phone'=>'required|min:11',
            'nid'=>'required|min:8',
            'dob'=>'required',
            'password'=>'required|min:8|max:20',
            'old_password'=>'required|min:8|max:20',
            'new_password'=>'required|min:8|max:20',
            'confirm_password'=>'required|min:8|max:20'
        ];
    }
}
