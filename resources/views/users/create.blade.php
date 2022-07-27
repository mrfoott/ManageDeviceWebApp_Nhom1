@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/user" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New User</h1>
                    <p>Fill and submit this form to create a new user</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="nameUsers">User Name</label>
                                <input type="text" id="nameUsers" class="form-control" name="nameUsers"
                                       placeholder="Enter User Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="addressUsers">User Name</label>
                                <input type="number" id="addressUsers" class="form-control" name="addressUsers"
                                       placeholder="Enter User Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="statusUsers">User Address</label>
                                <input type="text" id="statusUsers" class="form-control" name="statusUsers"
                                       placeholder="Enter User Status" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="idUsersRoles">User Role</label>
                                <input type="text" id="idUsersRoles" class="form-control" name="idUsersRoles"
                                       placeholder="Enter User Role" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="idUsersDepartments">User Department</label>
                                <input type="text" id="idUsersDepartments" class="form-control" name="idUsersDepartments"
                                       placeholder="Enter User Department" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
