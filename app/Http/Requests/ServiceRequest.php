<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;


use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

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
    public function rules(?Service $service = null): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' =>  (Route::is('submit-service')) ? ['string', 'max:255'] : ['string', 'max:255', 'required'],
            'link_to_service' => 'required|string|max:255',
            'excerpt' => 'required|max:140',
            'logo' => Route::is('submit-service') ? ['required','image'] : ['image'],
            'image' => Route::is('submit-service') ? ['required','image'] : ['image'],
            'main_content' => 'required',
            'developer' => 'required|string|max:255',
            'is_published' => 'required|numeric|max:1',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Не назначена назва",
            'title.max' => "Назва не може бути довше 255 символів",
            'slug.required' => "Не зазначено URL строку",
            'slug.max' => "URL строка не може бути довше 255 символів",
            'link_to_service.required' => "Не зазначено посилання на сервіс",
            'link_to_service.max' => "Посилання не сервіс не може бути довше 255 символів",
            'excerpt.required' => "Не зазначено короткий опис",
            'logo.required' => "Логотип не завантажено",
            'image.required' => "Зображення не завантажено",
            'main_content' => 'Не зазначено опис сервісу',
            'developer.required' => 'Не зазначено розробника',
            'developer.max' => "Назва розробника не може бути довше 255 символів",
            'is_published' => 'Невірний параметр',
            'category_id' => 'Не вірно зазначена категорія сервісу',
        ];
    }


}









