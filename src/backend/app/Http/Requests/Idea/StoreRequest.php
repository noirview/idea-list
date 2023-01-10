<?php

namespace App\Http\Requests\Idea;

use App\Enums\IdeaStatus;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string'
        ];
    }

    public function validated()
    {
        $validated = parent::validated();

        return array_merge($validated, [
            'status' => IdeaStatus::NEW,
        ]);
    }
}
