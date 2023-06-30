<?php

namespace App\Models;

use App\Models\User;
use App\Models\statut;
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

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function sommeleries()
    {
        return $this->hasMany(User::class, 'sommelerie_id');
    }
}
