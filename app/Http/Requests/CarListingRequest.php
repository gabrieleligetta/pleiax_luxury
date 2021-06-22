<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "brands-select" => "required|string|max:255",
            "models-select" => "required|string|max:255",
            "start-date-select" => "required|date",
            "end-date-select" => "required|date",
        ];
    }
}
