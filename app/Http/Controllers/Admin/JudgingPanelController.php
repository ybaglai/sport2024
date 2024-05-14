<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJudgingPanelRequest;
use App\Http\Requests\StoreJudgingPanelRequest;
use App\Http\Requests\UpdateJudgingPanelRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JudgingPanelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('judging_panel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.judgingPanels.index');
    }

    public function create()
    {
        abort_if(Gate::denies('judging_panel_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.judgingPanels.create');
    }

    public function store(StoreJudgingPanelRequest $request)
    {
        $judgingPanel = JudgingPanel::create($request->all());

        return redirect()->route('admin.judging-panels.index');
    }

    public function edit(JudgingPanel $judgingPanel)
    {
        abort_if(Gate::denies('judging_panel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.judgingPanels.edit', compact('judgingPanel'));
    }

    public function update(UpdateJudgingPanelRequest $request, JudgingPanel $judgingPanel)
    {
        $judgingPanel->update($request->all());

        return redirect()->route('admin.judging-panels.index');
    }

    public function show(JudgingPanel $judgingPanel)
    {
        abort_if(Gate::denies('judging_panel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.judgingPanels.show', compact('judgingPanel'));
    }

    public function destroy(JudgingPanel $judgingPanel)
    {
        abort_if(Gate::denies('judging_panel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $judgingPanel->delete();

        return back();
    }

    public function massDestroy(MassDestroyJudgingPanelRequest $request)
    {
        $judgingPanels = JudgingPanel::find(request('ids'));

        foreach ($judgingPanels as $judgingPanel) {
            $judgingPanel->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
