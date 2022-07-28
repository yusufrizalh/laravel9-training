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
            'name' => ['required', 'min:8', 'max:20', 'alpha'],
            'address' => ['required', 'string', 'min:8'],
        ];
    }
}
