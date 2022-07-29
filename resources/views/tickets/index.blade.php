@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Tickets!</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Ticket</p>
                        <a href="/ticket/create/ticket" class="btn btn-primary btn-sm">Add Ticket</a>
                    </div>
                </div>
                @forelse($ticket as $ticket)
                    <ul>
                        <li><a href="ticket/{{ $ticket->idTickets }}">{{ ucfirst($ticket->nameTickets) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Tickets available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
