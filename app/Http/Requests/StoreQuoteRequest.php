<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set to true to allow all users to submit the form.
        // You can add custom authorization logic here if needed (e.g., check user roles).
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
      

        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20', // Validation for phone number
            'shipment_type' => 'required|in:By Air,By Ship,By Road',
            'city_departure' => 'required|string|max:255',
            'delivery_city' => 'required|string|max:255',
            'incoterms' => 'required|in:EXW,FCA,FOB,CIF,DAP,DDP',
            'weight' => 'required|numeric|min:0|max:999999.99',
            'height' => 'required|numeric|min:0|max:999999.99',
            'width' => 'required|numeric|min:0|max:999999.99',
            'length' => 'required|numeric|min:0|max:999999.99',
            'express_delivery' => 'nullable|boolean',
            'insurance' => 'nullable|boolean',
            'packaging' => 'nullable|boolean',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB per image
            'box' => 'required|integer|min:1', // Validation for number of boxes
            'package_content' => 'nullable|string|max:1000', // Validation for package content
        ];
    }

    /**
     * Get custom error messages for validation rules (optional).
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            'email.required' => 'Please enter a valid email address.',
            'shipment_type.required' => 'Please select a shipment type.',
            'city_departure.required' => 'Please enter the departure city.',
            'delivery_city.required' => 'Please enter the delivery city.',
            'incoterms.required' => 'Please select an Incoterm.',
            'weight.required' => 'Please enter the weight.',
            'height.required' => 'Please enter the height.',
            'width.required' => 'Please enter the width.',
            'length.required' => 'Please enter the length.',
            'images.max' => 'You can upload a maximum of 4 images.',
            'images.*.image' => 'Each uploaded file must be an image.',
            'images.*.mimes' => 'Images must be in JPEG, PNG, or JPG format.',
            'images.*.max' => 'Each image must not exceed 2MB.',
        ];
    }
}
