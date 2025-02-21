<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }
    public function messages() {
        return [
            'name.string' => 'vui long dien ten cho dung',
            'age.numeric' => 'vui long nhap tuoi dung',
            'date.string' => 'vui long dien lai ngay thang',
            'phone.numeric' => 'vui long kiem tra lai so dien thoai',
            'web.string' => 'vui long kiem tra lai ki tu',
            'address.string' => 'vui long nhap lai dia chi'
        ];
    }
}
