<?php

namespace App\Http\Requests;

use App\Models\CompetitionCardFirst;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCompetitionCardFirstRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('competition_card_first_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:competition_card_firsts,id',
        ];
    }
}
