<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function messages(){
        return $this->hasMany(Messages::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }
}
