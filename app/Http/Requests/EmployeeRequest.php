<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:20'],
            'address' => ['required', 'string', 'min:4'],
            'department' => ['required'],
            'skills' => ['array', 'required'],
        ];
    }
}
