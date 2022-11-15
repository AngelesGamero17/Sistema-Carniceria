<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public function conditions(){
        return $this->hasMany(Condition::class,"id_maritals") ;
    }
    protected $primaryKey = 'id_users';
    public function products(){
        return $this->belongsToMany(Product::class, "id_orders");
    }
}
