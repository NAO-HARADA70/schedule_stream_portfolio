<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryRequest extends FormRequest
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
            'title' => ['required','min:2', 'max:20'],
            'stream_title' => ['required','min:2', 'max:100'],
            'stream_url' => ['required','min:2', 'max:255'],
            'before_body' => ['required','min:2', 'max:1000'],
            'after_body' => ['required','min:2', 'max:1000'],
            'stream_start' => ['required']
        ];
    }
}
