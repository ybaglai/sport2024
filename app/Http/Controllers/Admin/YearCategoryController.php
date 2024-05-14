<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyYearCategoryRequest;
use App\Http\Requests\StoreYearCategoryRequest;
use App\Http\Requests\UpdateYearCategoryRequest;
use App\Models\YearCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class YearCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('year_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $yearCategories = YearCategory::all();

        return view('admin.yearCategories.index', compact('yearCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('year_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.yearCategories.create');
    }

    public function store(StoreYearCategoryRequest $request)
    {
        $yearCategory = YearCategory::create($request->all());

        return redirect()->route('admin.year-categories.index');
    }

    public function edit(YearCategory $yearCategory)
    {
        abort_if(Gate::denies('year_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.yearCategories.edit', compact('yearCategory'));
    }

    public function update(UpdateYearCategoryRequest $request, YearCategory $yearCategory)
    {
        $yearCategory->update($request->all());

        return redirect()->route('admin.year-categories.index');
    }

    public function show(YearCategory $yearCategory)
    {
        abort_if(Gate::denies('year_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.yearCategories.show', compact('yearCategory'));
    }

    public function destroy(YearCategory $yearCategory)
    {
        abort_if(Gate::denies('year_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $yearCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyYearCategoryRequest $request)
    {
        $yearCategories = YearCategory::find(request('ids'));

        foreach ($yearCategories as $yearCategory) {
            $yearCategory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
