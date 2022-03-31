<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'username',
        'password',
    ];
    
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}



    

