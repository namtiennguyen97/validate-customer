<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name'=>'required|min:2|max:30',
            'age'=>'required| numeric|min:18',
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'Bat buoc phai nhap ten',
            'name.min' => 'Ten it nhat la 2 va lon nhat la 30!',
            'name.max' => 'Ten it nhat la 2 va lon nhat la 30!',
            'age.required' => 'Can nhap tuoi!',
            'age.numeric' => 'Tuoi phai la chu so',
            'age.min' => 'Tuoi it nhat la 18 tro len',
        ];

        return $messages;
    }
}
