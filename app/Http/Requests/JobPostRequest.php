<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Update this based on your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {

        return [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'salary_range' => 'required|string|max:100',
            'job_type' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category does not exist.',
            'title.required' => 'Please provide a title for the job post.',
            'image.image' => 'The uploaded file must be an image.',
        ];
    }
}
