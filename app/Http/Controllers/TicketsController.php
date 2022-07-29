<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Tickets::all();
        return view('tickets.index', [
            'ticket' => $ticket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTicket = Tickets::create([
            'nameTickets' => $request->nameTickets,
            'descriptionTickets' => $request->descriptionTickets,
        ]);
        return redirect('ticket/' . $newTicket->idTickets);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        $ticket = Tickets::where('idTickets', $ticket_id)->first();
        return view('tickets.show', [
            'ticket' => $ticket,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        return view('tickets.edit', [
            'tickets' => $tickets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tickets $tickets)
    {
        $tickets->update([
            'nameTickets' => $request->nameTickets,
            'descriptionTickets' => $request->descriptionTickets,
        ]);
        return redirect('ticket/' . $tickets->idTickets);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        $tickets->delete();

        return redirect('/ticket');
    }
}
