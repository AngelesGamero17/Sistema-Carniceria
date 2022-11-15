<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marital extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_maritals';
    public function products(){
        return $this->belongsToMany(Product::class, "id_users");
    }
}
