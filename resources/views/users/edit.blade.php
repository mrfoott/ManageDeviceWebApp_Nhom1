@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/user" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit User</h1>
                    <p>Edit and submit this form to update a role</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="nameUsers">User Name</label>
                                <input type="text" id="nameUsers" class="form-control" name="nameUsers"
                                       placeholder="Enter User Name" value="{{ $users->nameUsers }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="addressUsers">User Address</label>
                                <input type="text" id="addressUsers" class="form-control" name="addressUsers"
                                       placeholder="Enter User Address" value="{{ $users->addressUsers }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="statusUsers">User Status</label>
                                <input type="number" id="statusUsers" class="form-control" name="statusUsers"
                                       placeholder="Enter User Status" value="{{ $users->statusUsers }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="idUsersRoles">User Roles</label>
                                <input type="number" id="idUsersRoles" class="form-control" name="idUsersRoles"
                                       placeholder="Enter User Roles" value="{{ $users->idUsersRoles }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="idUsersDepartments">User Departments</label>
                                <input type="number" id="idUsersDepartments" class="form-control" name="idUsersDepartments"
                                       placeholder="Enter User Department" value="{{ $users->idUsersDepartments }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
