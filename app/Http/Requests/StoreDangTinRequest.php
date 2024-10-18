<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDangTinRequest extends FormRequest
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
            'noi dung' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000'
        ];
    }

    public function messages(): array
    {
        return [
            'noi dung' => 'Không được quá 255 ký tự',
            'video' => 'Không được quá 20MB'
        ];
    }
}
