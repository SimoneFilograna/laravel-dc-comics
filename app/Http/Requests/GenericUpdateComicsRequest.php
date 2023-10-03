<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenericUpdateComicsRequest extends FormRequest
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
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|decimal:0,2",
            "series"=>"nullable|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "required|string",
            "writers" => "required|string"
        ];
    }
}
