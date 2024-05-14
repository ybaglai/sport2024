<?php

namespace App\Http\Requests;

use App\Models\YearCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyYearCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('year_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:year_categories,id',
        ];
    }
}
