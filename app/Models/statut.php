<?php

namespace App\Models;

use App\Models\plaUser;
use App\Models\reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class statut extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function reservation(){
        return $this->hasMany(reservation::class);
    }
    public function achat(){
        return $this->hasMany(achat::class);
    }
    public function plaUser(){
        return $this->hasMany(plaUser::class);
    }
}
