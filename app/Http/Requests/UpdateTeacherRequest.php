<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
            // 'first_name' => 'string|max:255',
            // 'last_name' => 'string|max:255',
            // // 'email' => 'required|email|,email',
            // 'joining_date' => 'date',
            // 'password' => 'string|min:4',
            // 'mobile_number' => '',
            // 'gender' => 'in:Male,Female',
            // 'designation' => 'string|max:255',
            // 'class' => 'string',

            // 'qualifications' => 'string|max:255',
            //  'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ];
    }
}
