<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            // 'email' => ['required', 'string', 'email'],
            // 'password' => ['required', 'string'],
            // 'first_name' => ['required', 'string'],
            // 'last_name' => ['required', 'string'],
            // 'joining_date' => ['required', 'string'],
            // 'confirm_password' => ['required', 'string'],
            // 'mobile_number' => ['required', 'string'],
            // 'gender' => ['required', 'string'],
            // 'designation' => ['required', 'string'],
            // 'class' => ['required', 'string'],
            // 'dob' => ['required', 'string'],
            // 'qualifications' => ['required', 'string'],
            // 'profile_image' => ['required'],
            // 'doc'=>['required'],
            // 'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'doc' => 'required|mimes:pdf,doc,docx|max:2048',


            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'joining_date' => 'required|date',
            'password' => 'required|string|min:4',
            'mobile_number' => 'required|numeric',
            'gender' => 'required|in:Male,Female',
            'designation' => 'required|string|max:255',
            'class' => 'required|string',
            'dob' => 'required|date',
            'qualifications' => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',

        ];
    }
}
