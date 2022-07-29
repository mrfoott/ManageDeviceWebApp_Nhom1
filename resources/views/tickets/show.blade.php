@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/ticket" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ($ticket->nameTickets) }}</h1>
                <hr>
                <a href="./{{ $ticket->idTickets }}/edit" class="btn btn-outline-primary">Edit Ticket</a>
                <br><br>
                <form id="delete-frm" class="" action="" method ="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Ticket</button>
                </form>
            </div>
        </div>
    </div>
@endsection
