<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class FetchWordsByCategory extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $cat = Category::where('name', $this->category)->firstOrFail();

        return ['category' => $cat];
    }
}
