<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Adjust based on your authorization logic, e.g., check if user can update quotes
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'shipment_type' => 'required|in:By Air,By Ship,By Road',
            'incoterms' => 'required|in:EXW,FCA,FOB,CIF,DAP,DDP',
            'box' => 'required|integer|min:1',
            'city_departure' => 'required|string|max:255',
            'delivery_city' => 'required|string|max:255',
            'current_location' => 'nullable|string|max:255',
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'width' => 'required|numeric|min:0',
            'length' => 'required|numeric|min:0',
            'express_delivery' => 'nullable|boolean',
            'insurance' => 'nullable|boolean',
            'packaging' => 'nullable|boolean',
            'package_content' => 'nullable|string',
            'status' => 'required|in:Pending,In Transit,Delivered,Canceled',
            'price' => 'required|numeric|min:0',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_image_1' => 'nullable|in:0,1',
            'remove_image_2' => 'nullable|in:0,1',
            'remove_image_3' => 'nullable|in:0,1',
            'remove_image_4' => 'nullable|in:0,1',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'The first name is required.',
            'last_name.required' => 'The last name is required.',
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be valid.',
            'shipment_type.required' => 'Please select a shipment type.',
            'incoterms.required' => 'Please select an incoterm.',
            'box.required' => 'The number of boxes is required.',
            'box.integer' => 'The number of boxes must be a valid integer.',
            'city_departure.required' => 'The departure city is required.',
            'delivery_city.required' => 'The delivery city is required.',
            'weight.required' => 'The weight is required.',
            'height.required' => 'The height is required.',
            'width.required' => 'The width is required.',
            'length.required' => 'The length is required.',
            'status.required' => 'The status is required.',
            'price.required' => 'The price is required.',
            'image_*.image' => 'The uploaded file must be an image.',
            'image_*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image_*.max' => 'The image may not be larger than 2MB.',
        ];
    }
}
