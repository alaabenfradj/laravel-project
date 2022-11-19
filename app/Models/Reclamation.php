<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'tags', 'website', 'description', 'owner', 'location'];
    public function scopeFilter($query, array $filter)
    {
       
        if ($filter['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like' . '%', request('search') . '%');
                
        }
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
