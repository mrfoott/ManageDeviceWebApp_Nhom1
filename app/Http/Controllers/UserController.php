<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser = User::create([
            'nameUsers' => $request->nameUsers,
            'addressUsers' => $request->addressUsers,
            'statusUsers' => $request->statusUsers,
            'idUsersRoles' => $request->idUsersRoles,
            'idUsersDepartments' => $request->idUsersDepartments,
        ]);
        return redirect('user/' . $newUser->idUsers);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $users = User::where('idUsers', $user_id)->first();
        return view('users.show', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        return view('users.edit', [
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'addressUsers' => $request->addressUsers,
            'nameUsers' => $request->nameUsers,
            'statusUsers' => $request->statusUsers,
            'idUsersRoles' => $request->idUsersRoles,
            'idUsersDepartments' => $request->idUsersDepartments,
        ]);
        return redirect('user/' . $user->idUsers );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/user');
    }
}
