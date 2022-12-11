<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class marital extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_maritals';
    public function users(){
        return $this->belongsToMany(User::class, "id_users");
    }
}
