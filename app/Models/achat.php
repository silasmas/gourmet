<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class achat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function statut()
    {
        return $this->belongsTo(statut::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function entity()
    {
        return $this->belongsTo(sommelerie::class);
    }
}
