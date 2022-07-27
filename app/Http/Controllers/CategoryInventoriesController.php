<?php

namespace App\Http\Controllers;

use App\Models\CategoryInventories;
use App\Models\Roles;
use Illuminate\Http\Request;

class CategoryInventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateinve = CategoryInventories::all();
        return view('categoryinventories.index', [
            'cateinve' => $cateinve]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryinventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newCateInve = CategoryInventories::create([
            'nameCategoryInventories' => $request->nameCategoryInventories,
        ]);
        return redirect('cateinve/' . $newCateInve->idCategoryInventories );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryInventories  $categoryInventories
     * @return \Illuminate\Http\Response
     */
    public function show($cateinve_id)
    {
        $cateinve = CategoryInventories::where('idCategoryInventories', $cateinve_id)->first();
        return view('categoryinventories.show', [
            'cateinve' => $cateinve,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryInventories  $categoryInventories
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryInventories $categoryInventories)
    {
        return view('categoryinventories.edit', [
            'categoryInventories' => $categoryInventories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryInventories  $categoryInventories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryInventories $categoryInventories)
    {
        $categoryInventories->update([
            'nameCategoryInventories' => $request->nameCategoryInventories,
        ]);
        return redirect('cateinve/' . $categoryInventories->idCategoryInventories );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryInventories  $categoryInventories
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryInventories $categoryInventories)
    {
        $categoryInventories->delete();

        return redirect('/cateinve');
    }
}
