<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }
  public function closetikcet(Ticket $ticket)
    {
        $ticket->status = 'closed';
        $ticket->save();

        ticket($ticket->customer->email, "{$ticket->customer->name}, your ticket has been closed.");

        return redirect()->back()->with('success', 'Ticket closed successfully.');
    }
    public function respond(Request $request, $id)
{
    $ticket = Ticket::findOrFail($id);

    $request->validate([
        'response' => 'required|string|max:1000',
    ]);

    $ticket->update([
        'response' => $request->input('response'),
    ]);


    return redirect()->route('tickets.index')->with('success', 'Response sent successfully.');
}

    public function open(Ticket $ticket)
    {
        $ticket->status = 'open';
        $ticket->save();

        return redirect()->back()->with('success', 'Ticket opened successfully.');
    }
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        $ticket = Ticket::create([
            'customer_id' => Auth::id(),
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

    ticket(auth()->user()->email, 'Your ticket has been submitted please wait for response.');
    
        return redirect()->back()->with('success', 'Ticket Submiited successfully.');
    }
    

    public function index()
{
    $user = auth()->user();
    
    if ($user->user_type == 'admin') {
        $tickets = Ticket::with('customer')->get();
    } elseif ($user->user_type == 'customer') {
        $tickets = Ticket::with('customer')->where('customer_id', $user->id)->get();
    } else {
        $tickets = [];
    }

    return view('admin.ticket.index', compact('tickets'));
}

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function close(Ticket $ticket)
    {
        $ticket->update(['status' => 'closed']);

        // Send email to customer

        return redirect()->route('tickets.index')->with('success', 'Ticket closed successfully.');
    }
}
