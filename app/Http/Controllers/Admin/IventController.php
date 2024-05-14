<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyIventRequest;
use App\Http\Requests\StoreIventRequest;
use App\Http\Requests\UpdateIventRequest;
use App\Models\Ivent;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class IventController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('ivent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ivents = Ivent::with(['created_by', 'media'])->get();

        return view('admin.ivents.index', compact('ivents'));
    }

    public function create()
    {
        abort_if(Gate::denies('ivent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ivents.create');
    }

    public function store(StoreIventRequest $request)
    {
        $ivent = Ivent::create($request->all());

        foreach ($request->input('docs', []) as $file) {
            $ivent->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('docs');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ivent->id]);
        }

        return redirect()->route('admin.ivents.index');
    }

    public function edit(Ivent $ivent)
    {
        abort_if(Gate::denies('ivent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ivent->load('created_by');

        return view('admin.ivents.edit', compact('ivent'));
    }

    public function update(UpdateIventRequest $request, Ivent $ivent)
    {
        $ivent->update($request->all());

        if (count($ivent->docs) > 0) {
            foreach ($ivent->docs as $media) {
                if (! in_array($media->file_name, $request->input('docs', []))) {
                    $media->delete();
                }
            }
        }
        $media = $ivent->docs->pluck('file_name')->toArray();
        foreach ($request->input('docs', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $ivent->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('docs');
            }
        }

        return redirect()->route('admin.ivents.index');
    }

    public function show(Ivent $ivent)
    {
        abort_if(Gate::denies('ivent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ivent->load('created_by');

        return view('admin.ivents.show', compact('ivent'));
    }

    public function destroy(Ivent $ivent)
    {
        abort_if(Gate::denies('ivent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ivent->delete();

        return back();
    }

    public function massDestroy(MassDestroyIventRequest $request)
    {
        $ivents = Ivent::find(request('ids'));

        foreach ($ivents as $ivent) {
            $ivent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('ivent_create') && Gate::denies('ivent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Ivent();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
