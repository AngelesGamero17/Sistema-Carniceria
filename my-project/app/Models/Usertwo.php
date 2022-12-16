<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertwo extends Model
{
    use HasFactory;

    protected $fillable = ['name','surname','cell','address','id_marital','status'];
    public function maritals(){
        return $this->belongsToMany(Marital::class,'usertwo:marital');
    }


}
