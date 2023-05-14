<?php

namespace App\Models;

use App\Models\User;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class plat extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function categorie(){
        return $this->belongsTo(categorie::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
  
}
