<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Checkout\Session;

use App\Mail\MailTicket;
use App\Models\Concert;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->query('concert_id');
        $concert = Concert::find($id);
        return view('ticket.create', compact('concert'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $concert = Concert::findOrFail($request->concert_id);
        session(['pending_ticket' => $request->all()]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'uah',
                    'product_data' => [
                        'name' => 'Ticket for concert'
                    ],
                    'unit_amount' => $concert->price * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',

            'success_url' => url('/tickets/success'),
            'cancel_url' => url('/concerts'),
        ]);
        return redirect($checkout_session->url);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $tickets)
    {
        //
    }


    public function success(Request $request)
    {
        $ticketData = session('pending_ticket');
        if (! $ticketData) {
            return redirect('/concerts');
        }
        $ticket = Ticket::create($ticketData);
        $ticket->load('concert.artist');

        Mail::to($ticket->customer_email)->send(new MailTicket($ticket));
        session()->forget('pending_ticket');

        return redirect('/concerts')->with('success', 'Ticket created');
    }
}
