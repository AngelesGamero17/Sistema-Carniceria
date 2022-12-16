<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'stock', 'unit_price','id_condition','status'];
    public function orders(){
        return $this->belongsToMany(Order::class,'product:order');
    }

    public function conditions(){
        return $this->belongsToMany(condition::class,"product:condition") ;
    }

}
