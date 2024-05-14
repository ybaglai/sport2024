<?php

namespace App\Http\Requests;

use App\Models\CompetitionGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompetitionGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('competition_group_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'coach' => [
                'string',
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'competition_participants.*' => [
                'integer',
            ],
            'competition_participants' => [
                'array',
            ],
            'max_checkboxes' => [
                'string',
                'nullable',
            ],
        ];
    }
}
