<?php

namespace App\Http\Controllers;

use App\Models\plaUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PlaUserController extends Controller
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
        // Check if plat_user already exists
        $plat_user = plaUser::where('order_number', $request->orderNumber)->first();

        // If plat_user exists
        if ($plat_user != null) {
            $plat_user->update([
                'user_id' => $user_id,
                'plat_id' => $request->plat_id,
                'reference' => $request->reference,
                'order_number' => $request->orderNumber,
                'montant' => $request->amount,
                'monaie' => $request->currency,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                'statut_id' => $request->code,
                'customer_served' => $request->customer_served,
                'take_away' => $request->take_away,
                'updated_at' => now()
            ]);

            return $plat_user;

        // Otherwise, create new plat_user
        } else {
            $plat_user = plaUser::create([
                'user_id' => $user_id,
                'plat_id' => $request->plat_id,
                'reference' => $request->reference,
                'order_number' => $request->orderNumber,
                'montant' => $request->amount,
                'monaie' => $request->currency,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'channel' => $request->channel,
                'statut_id' => $request->code,
                'customer_served' => $request->customer_served,
                'take_away' => $request->take_away,
            ]);

            return $plat_user;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(plaUser $plaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plaUser $plaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plaUser $plaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plat_user = plaUser::find($id);
        $plat_users = plaUser::all();

        if (is_null($plat_user)) {
            return [
                'success' => false,
                'message' => 'Plat de l\'utilisateur non trouvé',
                'data' => $plat_users
            ];
        }

        $plat_user->delete();

        return [
            'success' => true,
            'message' => 'Donnée supprimée',
            'data' => $plat_users
        ];
    }
}
