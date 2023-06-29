<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;

class ReservationController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = is_numeric(explode('-', $request->reference)[2]) ? (int) explode('-', $request->reference)[2] : null;
        // Check if reservation already exists
        $reservation = reservation::where('order_number', $request->orderNumber)->first();

        // If achat exists
        if ($reservation != null) {
            $reservation->update([
                'user_id' => $user_id,
                'date' => $request->date,
                'nombre' => $request->nombre,
                'prix' => $request->amount,
                'monaie' => $request->currency,
                'reference' => $request->reference,
                'order_number' => $request->orderNumber,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                'statut_id' => $request->code,
                'updated_at' => now()
            ]);

            return $reservation;

        // Otherwise, create new reservation
        } else {
            $reservation = reservation::create([
                'user_id' => $user_id,
                'date' => $request->date,
                'nombre' => $request->nombre,
                'prix' => $request->amount,
                'monaie' => $request->currency,
                'reference' => $request->reference,
                'order_number' => $request->orderNumber,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                'statut_id' => $request->code,
            ]);

            return $reservation;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereservationRequest $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = reservation::find($id);
        $reservations = reservation::all();

        if (is_null($reservation)) {
            return [
                'success' => false,
                'message' => 'Réservation non trouvée',
                'data' => $reservations
            ];
        }

        $reservation->delete();

        return [
            'success' => true,
            'message' => 'Donnée supprimée',
            'data' => $reservations
        ];
    }
}
