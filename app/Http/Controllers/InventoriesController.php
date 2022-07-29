<?php

namespace App\Http\Controllers;

use App\Models\Inventories;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inve = Inventories::all();
        return view('inventories.index', [
            'inve' => $inve]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newInve = Inventories::create([
            'nameInventories' => $request->nameInventories,
            'nameUsers' => $request->nameUsers,
            'statusUsers' => $request->statusUsers,
        ]);
        return redirect('inve/' . $newInve->idInventories );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function show($inve_id)
    {
        $inve = Inventories::where('idInventories', $inve_id)->first();
        return view('inventories.show', [
            'inve' => $inve,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventories $inventories)
    {
        return view('inventories.edit', [
            'inventories' => $inventories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventories $inventories)
    {
        $inventories->update([
            'nameInventories' => $request->nameInventories,
            'nameUsers' => $request->nameUsers,
            'statusUsers' => $request->statusUsers,
        ]);
        return redirect('inve/' . $inventories->idInventories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventories  $inventories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventories $inventories)
    {
        $inventories->delete();

        return redirect('/inve');
    }
}
