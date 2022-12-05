<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    use HasFactory;
    protected $guarded = ['id'];

    // eager loading
    protected $with = ['categories', 'users'];



    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function users(){
        return $this->belongsTo(Users::class);
    }
}
