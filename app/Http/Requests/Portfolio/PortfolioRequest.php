<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['present'],
            'name'        => ['required', 'min:5', 'max:25', Rule::unique('portfolios', 'name')->ignore($this->portfolio)],
            'slug'        => ['filled', 'max:25', Rule::unique('portfolios', 'slug')->ignore($this->portfolio)],
            'description' => ['present'],
            'job'         => ['required'],
            'client'      => ['required'],
            'date'        => ['required'],
            'company'     => ['required'],
            'link'        => ['required'],
            'status'      => ['required'],
            'image'       => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ];
    }
}
