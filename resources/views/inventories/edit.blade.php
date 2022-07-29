@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/inve" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Inventories</h1>
                    <p>Edit and submit this form to update an inventories</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="nameInventories">Inventories Name</label>
                                <input type="text" id="nameInventories" class="form-control" name="nameInventories"
                                       placeholder="Enter Role Description" value="{{ $inventories->nameInventories }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="nameUsers">User Name</label>
                                <input type="text" id="nameUsers" class="form-control" name="nameUsers"
                                       placeholder="Enter User Name" value="{{ $inventories->nameUsers }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="statusUsers">User Status</label>
                                <input type="number" id="statusUsers" class="form-control" name="statusUsers"
                                       placeholder="Enter User Status" value="{{ $inventories->statusUsers }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Inventories
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
