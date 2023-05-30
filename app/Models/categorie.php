<?php

namespace App\Models;

use App\Models\plat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['nom', 'description', 'updated_at'];

    public function pla()
    {
        return $this->hasMany(plat::class);
    }
}
