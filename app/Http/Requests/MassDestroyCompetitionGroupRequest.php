<?php

namespace App\Http\Requests;

use App\Models\CompetitionGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCompetitionGroupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('competition_group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:competition_groups,id',
        ];
    }
}
