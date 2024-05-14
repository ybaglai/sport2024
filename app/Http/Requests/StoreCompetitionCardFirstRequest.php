<?php

namespace App\Http\Requests;

use App\Models\CompetitionCardFirst;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompetitionCardFirstRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('competition_card_first_create');
    }

    public function rules()
    {
        return [
            'db_1' => [
                'numeric',
            ],
            'db_2' => [
                'numeric',
            ],
            'db_3' => [
                'numeric',
            ],
            'db_4' => [
                'numeric',
            ],
            'db' => [
                'numeric',
            ],
            'da_1' => [
                'numeric',
            ],
            'da_2' => [
                'numeric',
            ],
            'da_3' => [
                'numeric',
            ],
            'da_4' => [
                'numeric',
            ],
            'ded' => [
                'numeric',
            ],
            'da' => [
                'numeric',
            ],
            'a_1' => [
                'numeric',
            ],
            'a_2' => [
                'numeric',
            ],
            'a_4' => [
                'numeric',
            ],
            'a_3' => [
                'numeric',
            ],
            'a' => [
                'numeric',
            ],
            'e_1' => [
                'numeric',
            ],
            'e_2' => [
                'numeric',
            ],
            'e_3' => [
                'numeric',
            ],
            'e_4' => [
                'numeric',
            ],
            'e' => [
                'numeric',
            ],
            'db_plus_da' => [
                'numeric',
            ],
            'a_panel' => [
                'numeric',
            ],
            'e_panel' => [
                'numeric',
            ],
            'overall_score' => [
                'numeric',
            ],
            'place' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'code' => [
                'string',
                'nullable',
            ],
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'time' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
