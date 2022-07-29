<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        return view('roles.index', [
            'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRole = Roles::create([
            'descriptionRoles' => $request->descriptionRoles,
        ]);
//        dd($request->descriptionRoles);
        return redirect('role/' . $newRole->idRoles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($role_id)
    {
////        dd($role_id);
            $role = Roles::where('idRoles', $role_id)->first();
////        dd($role);
//        return $role;
        return view('roles.show', [
            'role' => $role,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $roles)
    {
        return view('roles.edit', [
            'role' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        dd($roles->descriptionRoles);
    //    dd($request->descriptionRoles);
        $roles->update([
            'descriptionRoles' => $request->descriptionRoles,
        ]);

//        return redirect('role/' . $roles->idRoles);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();

        return redirect('/role');
    }
}
