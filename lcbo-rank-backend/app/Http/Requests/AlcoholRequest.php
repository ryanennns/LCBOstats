<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlcoholRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'sortBy' => 'prohibits:sortAsc,sortDesc',
            'sortAsc' => 'prohibits:sortBy,sortDesc',
            'sortDesc' => 'prohibits:sortAsc,sortBy',
        ];
    }
}
