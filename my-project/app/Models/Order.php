<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['total_price', 'overall_weight'];
    public function products(){
        return $this->belongsToMany(Product::class,'product:order');
    }
    public function conditions(){
        return $this->hasMany(Condition::class,"id_users") ;
    }
}
