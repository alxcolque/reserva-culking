<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => 'required|max:50',
            'slug' => 'nullable',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'discount_time' => 'nullable|date',
            'discount_reason' => 'nullable',
            'description' => 'nullable',
        ];
    }
}
