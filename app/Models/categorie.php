<?php

namespace App\Models;

use App\Models\plat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function plats()
    {
        return $this->hasMany(plat::class);
    }

    public function sommeleries()
    {
        return $this->hasMany(sommelerie::class);
    }
}
