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


    public function scopeFilters($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like' , '%' . $search . '%')
            ->orWhere('title', 'like' , '%' . $search . '%');
        });

        // query filter
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('categories', function($query) use ($category){
                    $query->where('slug', $category);
            });
        });
    }



    public function categories(){
        return $this->belongsTo(Categories::class);
    }


    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function users(){
        return $this->belongsTo(Users::class);
    }
}
