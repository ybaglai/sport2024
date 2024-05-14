<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyListindexRequest;
use App\Http\Requests\StoreListindexRequest;
use App\Http\Requests\UpdateListindexRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListindexController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('listindex_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listindices.index');
    }

    public function create()
    {
        abort_if(Gate::denies('listindex_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listindices.create');
    }

    public function store(StoreListindexRequest $request)
    {
        $listindex = Listindex::create($request->all());

        return redirect()->route('admin.listindices.index');
    }

    public function edit(Listindex $listindex)
    {
        abort_if(Gate::denies('listindex_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listindices.edit', compact('listindex'));
    }

    public function update(UpdateListindexRequest $request, Listindex $listindex)
    {
        $listindex->update($request->all());

        return redirect()->route('admin.listindices.index');
    }

    public function show(Listindex $listindex)
    {
        abort_if(Gate::denies('listindex_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listindices.show', compact('listindex'));
    }

    public function destroy(Listindex $listindex)
    {
        abort_if(Gate::denies('listindex_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listindex->delete();

        return back();
    }

    public function massDestroy(MassDestroyListindexRequest $request)
    {
        $listindices = Listindex::find(request('ids'));

        foreach ($listindices as $listindex) {
            $listindex->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
