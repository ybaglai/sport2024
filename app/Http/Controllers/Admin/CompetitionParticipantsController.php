<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompetitionParticipantRequest;
use App\Http\Requests\StoreCompetitionParticipantRequest;
use App\Http\Requests\UpdateCompetitionParticipantRequest;
use App\Models\Category;
use App\Models\CompetitionParticipant;
use App\Models\User;
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

        $competitionParticipants = CompetitionParticipant::with(['category', 'created_by', 'media'])->get();

        $categories = Category::get();

        $users = User::get();

        return view('admin.competitionParticipants.index', compact('categories', 'competitionParticipants', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('competition_participant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.competitionParticipants.create', compact('categories'));
    }

    public function store(StoreCompetitionParticipantRequest $request)
    {
        $competitionParticipant = CompetitionParticipant::create($request->all());

        if ($request->input('foto', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('foto'))))->toMediaCollection('foto');
        }

        if ($request->input('add_musicfor_wa', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_musicfor_wa'))))->toMediaCollection('add_musicfor_wa');
        }

        if ($request->input('add_music_for_rope', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_rope'))))->toMediaCollection('add_music_for_rope');
        }

        if ($request->input('add_music_for_hoop', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_hoop'))))->toMediaCollection('add_music_for_hoop');
        }

        if ($request->input('add_music_for_ball', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_ball'))))->toMediaCollection('add_music_for_ball');
        }

        if ($request->input('add_music_for_clubs', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_clubs'))))->toMediaCollection('add_music_for_clubs');
        }

        if ($request->input('add_music_for_ribbon', false)) {
            $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_ribbon'))))->toMediaCollection('add_music_for_ribbon');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $competitionParticipant->id]);
        }

        return redirect()->route('admin.competition-participants.index');
    }

    public function edit(CompetitionParticipant $competitionParticipant)
    {
        abort_if(Gate::denies('competition_participant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $competitionParticipant->load('category', 'created_by');

        return view('admin.competitionParticipants.edit', compact('categories', 'competitionParticipant'));
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

        if ($request->input('add_musicfor_wa', false)) {
            if (! $competitionParticipant->add_musicfor_wa || $request->input('add_musicfor_wa') !== $competitionParticipant->add_musicfor_wa->file_name) {
                if ($competitionParticipant->add_musicfor_wa) {
                    $competitionParticipant->add_musicfor_wa->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_musicfor_wa'))))->toMediaCollection('add_musicfor_wa');
            }
        } elseif ($competitionParticipant->add_musicfor_wa) {
            $competitionParticipant->add_musicfor_wa->delete();
        }

        if ($request->input('add_music_for_rope', false)) {
            if (! $competitionParticipant->add_music_for_rope || $request->input('add_music_for_rope') !== $competitionParticipant->add_music_for_rope->file_name) {
                if ($competitionParticipant->add_music_for_rope) {
                    $competitionParticipant->add_music_for_rope->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_rope'))))->toMediaCollection('add_music_for_rope');
            }
        } elseif ($competitionParticipant->add_music_for_rope) {
            $competitionParticipant->add_music_for_rope->delete();
        }

        if ($request->input('add_music_for_hoop', false)) {
            if (! $competitionParticipant->add_music_for_hoop || $request->input('add_music_for_hoop') !== $competitionParticipant->add_music_for_hoop->file_name) {
                if ($competitionParticipant->add_music_for_hoop) {
                    $competitionParticipant->add_music_for_hoop->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_hoop'))))->toMediaCollection('add_music_for_hoop');
            }
        } elseif ($competitionParticipant->add_music_for_hoop) {
            $competitionParticipant->add_music_for_hoop->delete();
        }

        if ($request->input('add_music_for_ball', false)) {
            if (! $competitionParticipant->add_music_for_ball || $request->input('add_music_for_ball') !== $competitionParticipant->add_music_for_ball->file_name) {
                if ($competitionParticipant->add_music_for_ball) {
                    $competitionParticipant->add_music_for_ball->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_ball'))))->toMediaCollection('add_music_for_ball');
            }
        } elseif ($competitionParticipant->add_music_for_ball) {
            $competitionParticipant->add_music_for_ball->delete();
        }

        if ($request->input('add_music_for_clubs', false)) {
            if (! $competitionParticipant->add_music_for_clubs || $request->input('add_music_for_clubs') !== $competitionParticipant->add_music_for_clubs->file_name) {
                if ($competitionParticipant->add_music_for_clubs) {
                    $competitionParticipant->add_music_for_clubs->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_clubs'))))->toMediaCollection('add_music_for_clubs');
            }
        } elseif ($competitionParticipant->add_music_for_clubs) {
            $competitionParticipant->add_music_for_clubs->delete();
        }

        if ($request->input('add_music_for_ribbon', false)) {
            if (! $competitionParticipant->add_music_for_ribbon || $request->input('add_music_for_ribbon') !== $competitionParticipant->add_music_for_ribbon->file_name) {
                if ($competitionParticipant->add_music_for_ribbon) {
                    $competitionParticipant->add_music_for_ribbon->delete();
                }
                $competitionParticipant->addMedia(storage_path('tmp/uploads/' . basename($request->input('add_music_for_ribbon'))))->toMediaCollection('add_music_for_ribbon');
            }
        } elseif ($competitionParticipant->add_music_for_ribbon) {
            $competitionParticipant->add_music_for_ribbon->delete();
        }

        return redirect()->route('admin.competition-participants.index');
    }

    public function show(CompetitionParticipant $competitionParticipant)
    {
        abort_if(Gate::denies('competition_participant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $competitionParticipant->load('category', 'created_by', 'competitionParticipiantCompetitionCardFirsts', 'competitionParticipantsCompetitionGroups');

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
