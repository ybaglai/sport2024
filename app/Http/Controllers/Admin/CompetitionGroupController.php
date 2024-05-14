<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCompetitionGroupRequest;
use App\Http\Requests\StoreCompetitionGroupRequest;
use App\Http\Requests\UpdateCompetitionGroupRequest;
use App\Models\CompetitionGroup;
use App\Models\CompetitionParticipant;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompetitionGroupController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('competition_group_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionGroups = CompetitionGroup::with(['competition_participants', 'created_by'])->get();

        return view('admin.competitionGroups.index', compact('competitionGroups'));
    }

    public function create()
    {
        abort_if(Gate::denies('competition_group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competition_participants = CompetitionParticipant::pluck('fullname', 'id');

        return view('admin.competitionGroups.create', compact('competition_participants'));
    }

    public function store(StoreCompetitionGroupRequest $request)
    {
        $competitionGroup = CompetitionGroup::create($request->all());
        $competitionGroup->competition_participants()->sync($request->input('competition_participants', []));

        return redirect()->route('admin.competition-groups.index');
    }

    public function edit(CompetitionGroup $competitionGroup)
    {
        abort_if(Gate::denies('competition_group_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competition_participants = CompetitionParticipant::pluck('fullname', 'id');

        $competitionGroup->load('competition_participants', 'created_by');

        return view('admin.competitionGroups.edit', compact('competitionGroup', 'competition_participants'));
    }

    public function update(UpdateCompetitionGroupRequest $request, CompetitionGroup $competitionGroup)
    {
        $competitionGroup->update($request->all());
        $competitionGroup->competition_participants()->sync($request->input('competition_participants', []));

        return redirect()->route('admin.competition-groups.index');
    }

    public function show(CompetitionGroup $competitionGroup)
    {
        abort_if(Gate::denies('competition_group_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionGroup->load('competition_participants', 'created_by');

        return view('admin.competitionGroups.show', compact('competitionGroup'));
    }

    public function destroy(CompetitionGroup $competitionGroup)
    {
        abort_if(Gate::denies('competition_group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionGroup->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompetitionGroupRequest $request)
    {
        $competitionGroups = CompetitionGroup::find(request('ids'));

        foreach ($competitionGroups as $competitionGroup) {
            $competitionGroup->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
