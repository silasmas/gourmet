<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class reservation extends JsonResource
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
            'date' => $this->date,
            'nombre' => $this->nombre,
            'prix' => $this->prix,
            'monaie' => $this->monaie,
            'reference' => $this->reference,
            'order_number' => $this->order_number,
            'phone' => $this->phone,
            'channel' => $this->channel,
            'statut' => statut::make($this->statut),
            'customer_served' => $this->customer_served,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s')
        ];
    }
}
