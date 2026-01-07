<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index()
    {
    $tickets = Ticket::with('user')->latest()->get();

    return view('admin.dashboard', [
        'tickets' => $tickets,
        'openCount' => Ticket::where('status', 'open')->count(),
        'in_progressCount' => Ticket::where('status', 'in_progress')->count(),
        'closedCount' => Ticket::where('status', 'closed')->count(),
    ]);
    }
}
