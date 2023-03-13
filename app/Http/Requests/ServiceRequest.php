<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'link_to_service' => 'required',
            'excerpt' => 'required',
            'logo' => 'required|file',
            'image' => 'required|file',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Найменування обов'язкове для заповнення",
            'link_to_service.required' => "Посилання на сервіс обов'язкове для заповнення",
            'excerpt.required' => "Короткий опис обов'язковий для заповнення",
        ];
    }


}
