<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = ['name','surname','cell','address','id_marital'];
    public function maritals(){
        return $this->belongsToMany(Marital::class,'user:marital');
    }


}
