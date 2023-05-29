<?php

namespace App\Http\Controllers;

use App\Models\achat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreachatRequest;
use App\Http\Requests\UpdateachatRequest;

class AchatController extends Controller
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
        $user_id = is_numeric(explode('-', $request->reference)[2]) ? (int) explode('-', $request->reference)[2] : null;
        // Check if achat already exists
        $achat = achat::where('order_number', $request->orderNumber)->first();

        // If achat exists
        if ($achat != null) {
            $achat->update([
                'user_id' => $user_id,
                'sommelerie_id' => $request->sommelerie_id,
                'reference' => $request->reference,
                // 'provider_reference' => $request->provider_reference,
                'order_number' => $request->orderNumber,
                'montant' => $request->amount,
                'monaie' => $request->currency,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                // 'type_id' => $request->type,
                'status_id' => $request->code,
                'updated_at' => now()
            ]);

            return $achat;

            // Otherwise, create new achat
        } else {
            $achat = achat::create([
                'user_id' => $user_id,
                'sommelerie_id' => $request->sommelerie_id,
                'reference' => $request->reference,
                // 'provider_reference' => $request->provider_reference,
                'order_number' => $request->orderNumber,
                'montant' => $request->amount,
                'monaie' => $request->currency,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                // 'type_id' => $request->type,
                'status_id' => $request->code,
            ]);

            return $achat;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreachatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(achat $achat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateachatRequest $request, achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(achat $achat)
    {
        //
    }
}
