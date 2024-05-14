<?php

namespace App\Http\Requests;

use App\Models\TypeOfCompetition;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTypeOfCompetitionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('type_of_competition_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:type_of_competitions,id',
        ];
    }
}
