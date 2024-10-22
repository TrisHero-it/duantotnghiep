<?php

namespace App\Http\Requests\Catalogues;

use Illuminate\Foundation\Http\FormRequest;

class CatalogueStoreRequest extends FormRequest
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
            'ten_danh_muc' => 'required|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
