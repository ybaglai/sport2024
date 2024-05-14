<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompetitionParticipantRequest;
use App\Http\Requests\StoreCompetitionParticipantRequest;
use App\Http\Requests\UpdateCompetitionParticipantRequest;
use App\Models\CompetitionParticipant;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CompetitionParticipantsController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('competition_participant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionParticipants = CompetitionParticipant::with(['created_by', 'media'])->get();

        return view('admin.competitionParticipants.index', compact('competitionParticipants'));
    }

    public function create()
    {
        abort_if(Gate::denies('competition_participant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competitionParticipants.create');
    }

    public function store(StoreCompetitionParticipantRequest $request)
    {
        $competitionParticipant = CompetitionParticipant::create($request->all());

        if ($request->input('foto', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('foto'))))->toMediaCollection('foto');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $competitionParticipant->id]);
        }

        return redirect()->route('admin.competition-participants.index');
    }

    public function edit(CompetitionParticipant $competitionParticipant)
    {
        abort_if(Gate::denies('competition_participant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionParticipant->load('created_by');

        return view('admin.competitionParticipants.edit', compact('competitionParticipant'));
    }

    public function update(UpdateCompetitionParticipantRequest $request, CompetitionParticipant $competitionParticipant)
    {
        $competitionParticipant->update($request->all());

        if ($request->input('foto', false)) {
            if (! $competitionParticipant->foto || $request->input('foto') !== $competitionParticipant->foto->file_name) {
                if ($competitionParticipant->foto) {
                    $competitionParticipant->foto->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('foto'))))->toMediaCollection('foto');
            }
        } elseif ($competitionParticipant->foto) {
            $competitionParticipant->foto->delete();
        }

        return redirect()->route('admin.competition-participants.index');
    }

    public function show(CompetitionParticipant $competitionParticipant)
    {
        abort_if(Gate::denies('competition_participant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionParticipant->load('created_by', 'competitionParticipantsCompetitionGroups');

        return view('admin.competitionParticipants.show', compact('competitionParticipant'));
    }

    public function destroy(CompetitionParticipant $competitionParticipant)
    {
        abort_if(Gate::denies('competition_participant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionParticipant->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompetitionParticipantRequest $request)
    {
        $competitionParticipants = CompetitionParticipant::find(request('ids'));

        foreach ($competitionParticipants as $competitionParticipant) {
            $competitionParticipant->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('competition_participant_create') && Gate::denies('competition_participant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CompetitionParticipant();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
