<?php

namespace App\Http\Requests;

use App\Models\CompetitionParticipant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompetitionParticipantRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('competition_participant_create');
    }

    public function rules()
    {
        return [
            'type' => [
                'required',
            ],
            'fig_licence_nr' => [
                'string',
                'nullable',
            ],
            'national_lic' => [
                'string',
                'nullable',
            ],
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
            'year_of_birth' => [
                'string',
                'nullable',
            ],
            'coaches' => [
                'string',
                'nullable',
            ],
            'organization' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'contact_address' => [
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
            'apparatus_wa_logo' => [
                'string',
                'nullable',
            ],
            'apparatus_rope_foto' => [
                'string',
                'nullable',
            ],
            'apparatus_hoop_foto' => [
                'string',
                'nullable',
            ],
            'apparatus_ball_foto' => [
                'string',
                'nullable',
            ],
            'apparatus_clubs_foto' => [
                'string',
                'nullable',
            ],
            'apparatus_ribbon_foto' => [
                'string',
                'nullable',
            ],
        ];
    }
}
