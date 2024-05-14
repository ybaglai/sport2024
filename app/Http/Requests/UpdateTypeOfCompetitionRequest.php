<?php

namespace App\Http\Requests;

use App\Models\TypeOfCompetition;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTypeOfCompetitionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('type_of_competition_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'icon' => [
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'icon_2' => [
                'string',
                'nullable',
            ],
        ];
    }
}
