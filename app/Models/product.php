<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'stock', 'unit_price'];
    
    public function orders(){
        return $this->belongsToMany(Oder::class,'product:order');
    }

    public function conditions(){
        return $this->hasMany(Condition::class,"id_conditions") ;
    }
}
