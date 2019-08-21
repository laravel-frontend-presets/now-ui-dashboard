<?php

namespace App\Http\Requests;

use App\Tag;
use App\Item;
use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3', Rule::unique((new Item)->getTable())->ignore($this->route()->item->id ?? null)
            ],
            'category_id' => [
                'required', 'exists:'.(new Category)->getTable().',id'
            ],
            'excerpt' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'photo' => [
                $this->route()->item ? 'nullable' : 'required', 'image'
            ],
            'tags' => [
                'required'
            ],
            'tags.*' => [
                'exists:'.(new Tag)->getTable().',id'
            ],
            'status' => [
                'required',
                'in:published,draft,archive'
            ],
            'date' => [
                'required',
                'date_format:d-m-Y'
            ]
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'category_id' => 'category',
            'photo' => 'picture'
        ];
    }
}
