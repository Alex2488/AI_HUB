<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'slug' =>  (Route::is('submit-post')) ? ['string', 'max:255'] : ['string', 'max:255', 'required'],
            'excerpt' => 'required|max:140',
            'image' => Route::is('submit-post') ? ['required','image'] : ['image'],
            'main_content' => 'required',
            'is_published' => 'required|numeric|max:1',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Не назначено назва",
            'title.max' => "Назва не може бути довше 255 символів",
            'slug.required' => "Не зазначено URL строку",
            'slug.string' => "Помилка в URL строці",
            'slug.max' => "URL строка не може бути довше 255 символів",
            'excerpt.required' => "Не зазначено короткий опис",
            'excerpt.max' => "Короткий опис не може бути довше 140 символів",
            'logo.required' => "Логотип не завантажено",
            'image.required' => "Зображення не завантажено",
            'main_content' => 'Не зазначено повний опис',
            'is_published' => 'Невірний параметр',
        ];
    }
}
