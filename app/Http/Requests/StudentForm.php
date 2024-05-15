<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentForm extends FormRequest
{


    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'roll' => ['required'],
            'address' => ['required'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif','max:2048'],
            
        ];
    }
}
