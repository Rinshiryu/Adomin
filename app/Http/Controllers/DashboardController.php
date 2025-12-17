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
        'total' => Ticket::count(),
        'open' => Ticket::where('status', 'open')->count(),
        'closed' => Ticket::where('status', 'closed')->count(),
    ]);
    }
}
