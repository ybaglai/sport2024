<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCompetitionCardFirstRequest;
use App\Http\Requests\StoreCompetitionCardFirstRequest;
use App\Http\Requests\UpdateCompetitionCardFirstRequest;
use App\Models\CompetitionCardFirst;
use App\Models\CompetitionGroup;
use App\Models\CompetitionParticipant;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompetitionCardFirstController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('competition_card_first_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionCardFirsts = CompetitionCardFirst::with(['competition_participiant', 'competition_group', 'created_by'])->get();

        $competition_participants = CompetitionParticipant::get();

        $competition_groups = CompetitionGroup::get();

        $users = User::get();

        return view('admin.competitionCardFirsts.index', compact('competitionCardFirsts', 'competition_groups', 'competition_participants', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('competition_card_first_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competition_participiants = CompetitionParticipant::pluck('fullname', 'id')->prepend(trans('global.pleaseSelect'), '');

        $competition_groups = CompetitionGroup::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.competitionCardFirsts.create', compact('competition_groups', 'competition_participiants'));
    }

    public function store(StoreCompetitionCardFirstRequest $request)
    {
        $competitionCardFirst = CompetitionCardFirst::create($request->all());

        return redirect()->route('admin.competition-card-firsts.index');
    }

    public function edit(CompetitionCardFirst $competitionCardFirst)
    {
        abort_if(Gate::denies('competition_card_first_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competition_participiants = CompetitionParticipant::pluck('fullname', 'id')->prepend(trans('global.pleaseSelect'), '');

        $competition_groups = CompetitionGroup::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $competitionCardFirst->load('competition_participiant', 'competition_group', 'created_by');

        return view('admin.competitionCardFirsts.edit', compact('competitionCardFirst', 'competition_groups', 'competition_participiants'));
    }

    public function update(UpdateCompetitionCardFirstRequest $request, CompetitionCardFirst $competitionCardFirst)
    {
        $competitionCardFirst->update($request->all());

        return redirect()->route('admin.competition-card-firsts.index');
    }

    public function show(CompetitionCardFirst $competitionCardFirst)
    {
        abort_if(Gate::denies('competition_card_first_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionCardFirst->load('competition_participiant', 'competition_group', 'created_by');

        return view('admin.competitionCardFirsts.show', compact('competitionCardFirst'));
    }

    public function destroy(CompetitionCardFirst $competitionCardFirst)
    {
        abort_if(Gate::denies('competition_card_first_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionCardFirst->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompetitionCardFirstRequest $request)
    {
        $competitionCardFirsts = CompetitionCardFirst::find(request('ids'));

        foreach ($competitionCardFirsts as $competitionCardFirst) {
            $competitionCardFirst->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
