<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTypeOfCompetitionRequest;
use App\Http\Requests\StoreTypeOfCompetitionRequest;
use App\Http\Requests\UpdateTypeOfCompetitionRequest;
use App\Models\TypeOfCompetition;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TypeOfCompetitionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('type_of_competition_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeOfCompetitions = TypeOfCompetition::with(['media'])->get();

        return view('admin.typeOfCompetitions.index', compact('typeOfCompetitions'));
    }

    public function create()
    {
        abort_if(Gate::denies('type_of_competition_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfCompetitions.create');
    }

    public function store(StoreTypeOfCompetitionRequest $request)
    {
        $typeOfCompetition = TypeOfCompetition::create($request->all());

        if ($request->input('icon', false)) {
            $typeOfCompetition->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $typeOfCompetition->id]);
        }

        return redirect()->route('admin.type-of-competitions.index');
    }

    public function edit(TypeOfCompetition $typeOfCompetition)
    {
        abort_if(Gate::denies('type_of_competition_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfCompetitions.edit', compact('typeOfCompetition'));
    }

    public function update(UpdateTypeOfCompetitionRequest $request, TypeOfCompetition $typeOfCompetition)
    {
        $typeOfCompetition->update($request->all());

        if ($request->input('icon', false)) {
            if (! $typeOfCompetition->icon || $request->input('icon') !== $typeOfCompetition->icon->file_name) {
                if ($typeOfCompetition->icon) {
                    $typeOfCompetition->icon->delete();
                }
                $typeOfCompetition->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
            }
        } elseif ($typeOfCompetition->icon) {
            $typeOfCompetition->icon->delete();
        }

        return redirect()->route('admin.type-of-competitions.index');
    }

    public function show(TypeOfCompetition $typeOfCompetition)
    {
        abort_if(Gate::denies('type_of_competition_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfCompetitions.show', compact('typeOfCompetition'));
    }

    public function destroy(TypeOfCompetition $typeOfCompetition)
    {
        abort_if(Gate::denies('type_of_competition_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeOfCompetition->delete();

        return back();
    }

    public function massDestroy(MassDestroyTypeOfCompetitionRequest $request)
    {
        $typeOfCompetitions = TypeOfCompetition::find(request('ids'));

        foreach ($typeOfCompetitions as $typeOfCompetition) {
            $typeOfCompetition->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('type_of_competition_create') && Gate::denies('type_of_competition_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new TypeOfCompetition();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
