<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSclassRequest extends FormRequest
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
            //
            'class_name_in_words' => 'required|string|max:255',
            'class_name_in_number' => 'required|string|max:10',
            'class_fee' => 'required|numeric',
            'class_code' => 'required|string|max:10',
            'no_of_students' => 'required|integer',
            'no_of_subject' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
            'class_teacher_first_name' => 'required|string|max:255',
            'class_teacher_last_name' => 'required|string|max:255',
        ];
    }
}
