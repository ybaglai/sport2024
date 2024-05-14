<?php

namespace App\Http\Requests;

use App\Models\CompetitionParticipant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCompetitionParticipantRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('competition_participant_edit');
    }

    public function rules()
    {
        return [
            'surname' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'fullname' => [
                'string',
                'nullable',
            ],
            'organization' => [
                'string',
                'nullable',
            ],
            'coach' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'link_to_the_archive' => [
                'string',
                'nullable',
            ],
            'code' => [
                'string',
                'nullable',
            ],
        ];
    }
}
