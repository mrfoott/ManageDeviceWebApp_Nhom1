@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/ticket" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New Ticket</h1>
                    <p>Fill and submit this form to create a new ticket</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="nameTickets">Ticket Name</label>
                                <input type="text" id="nameTickets" class="form-control" name="nameTickets"
                                       placeholder="Enter Ticket Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="descriptionTickets">Ticket Description</label>
                                <input type="text" id="descriptionTickets" class="form-control" name="descriptionTickets"
                                       placeholder="Enter Ticket Description" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Ticket
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
