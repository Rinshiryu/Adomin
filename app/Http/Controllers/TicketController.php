<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Ticket::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'isi' => $request->isi,
            'status' => 'open',
        ]);

        return redirect()->back()->with('success', 'Tiket berhasil dikirim');
    }
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }
    public function index()
    {
        $tickets = Ticket::with('user')->latest()->get();
        return view('tickets.index', compact('tickets'));
    }
    public function updateStatus(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|in:open,in_progress,closed',
        ]);

        $ticket->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status ticket berhasil diperbarui');
    }
}
