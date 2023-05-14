<?php

namespace App\Models;

use App\Models\User;
use App\Models\statut;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class achat extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(){
        return $this->hasMany(User::class,'user_id');
    }
    public function sommelerie(){
        return $this->hasMany(User::class,'sommelerie_id');
    }
    public function statut(){
        return $this->belongsTo(statut::class);
    }
}
