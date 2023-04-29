<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }

    public function rules(): array
    {
        return [
            'name'        => ['required', 'min:5', 'max:25', Rule::unique('categories', 'name')->ignore($this->category)],
            'slug'        => ['filled', 'max:25', Rule::unique('categories', 'slug')->ignore($this->category)],
            'description' => ['present'],
            'is_featured' => ['filled'],
            'status'      => ['required'],
        ];
    }
}
