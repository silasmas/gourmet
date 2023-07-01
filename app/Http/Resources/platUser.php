<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class platUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => User::make($this->user),
            'plat' => plat::make($this->plat),
            'reference' => $this->reference,
            'order_number' => $this->order_number,
            'montant' => $this->montant,
            'monaie' => $this->monaie,
            'statut' => statut::make($this->statut),
            'customer_served' => $this->customer_served,
            'take_away' => $this->take_away,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
