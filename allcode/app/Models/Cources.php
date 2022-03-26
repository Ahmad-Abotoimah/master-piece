<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cources extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function courses (){
        return $this->belongsToMany(User::class);
    }
    public function tickets (){
        return $this->hasMany(Tickets::class);
    }
}
