<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class achat extends JsonResource
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
            'entity' => plat::make($this->entity),
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
