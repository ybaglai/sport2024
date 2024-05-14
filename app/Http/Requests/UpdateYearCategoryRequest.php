<?php

namespace App\Http\Requests;

use App\Models\YearCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateYearCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('year_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
