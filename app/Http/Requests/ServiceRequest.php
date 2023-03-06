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
            'slug' => 'required',
            'logo_link' => 'required',
            'link_to_service' => 'required',
            'excerpt' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Найменування обов'язкове для заповнення",
            'slug.required' => "URL строка обов'язкова для заповнення",
            'logo_link.required' => "Посилання на лого обов'язкове для заповнення",
            'link_to_service.required' => "Посилання на сервіс обов'язкове для заповнення",
            'excerpt.required' => "Короткий опис обов'язковий для заповнення",
        ];
    }


}
