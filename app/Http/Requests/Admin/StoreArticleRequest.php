<?php

namespace App\Http\Requests\Admin;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation() {
        $this->merge([
            'category_id' => +(Crypt::decryptString($this->category)),
            'tags' => explode(',', $this->tags)
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
            'title' => 'required|max:255',
            'full_text' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|bail|array'
        ];

    }
}
