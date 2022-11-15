<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condition extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_conditions';
    public function products(){
        return $this->belongsToMany(Product::class, "id_products");
    }
}
