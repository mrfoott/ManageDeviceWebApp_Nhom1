<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Roles;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Departments::all();
        return view('departments.index', [
            'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDepartment = Roles::create([
            'descriptionRoles' => $request->nameDepartments,
            'statusDepartments' => $request->statusDepartments,
        ]);
        dd($request->nameDepartments);
        dd($request->statusDepartments);
        //        return redirect('department/' . $newDepartment->idDepartments );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show($department_id)
    {
        $department = Departments::where('idDepartments', $department_id)->first();
        return view('departments.show', [
            'department' => $department,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $departments)
    {
        return view('departments.edit', [
            'department' => $departments,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departments $departments)
    {
        $departments->update([
            'nameDepartments' => $request->nameDepartments,
            'statusDepartments' => $request->statusDepartments,
        ]);
        return redirect('department/' . $departments->idDepartments );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $departments)
    {
        $departments->delete();

        return redirect('/department');
    }
}
