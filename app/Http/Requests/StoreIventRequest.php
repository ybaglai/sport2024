<?php

namespace App\Http\Requests;

use App\Models\Ivent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIventRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ivent_create');
    }

    public function rules()
    {
        return [
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_to' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'event_name' => [
                'string',
                'nullable',
            ],
            'place' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'deadline' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'deadline_d_form_and_mp_3' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'organizer' => [
                'string',
                'nullable',
            ],
            'volunteers_from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'volunteers_to' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'meal_from' => [
                'string',
                'nullable',
            ],
            'meal_to' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'docs' => [
                'array',
            ],
        ];
    }
}
