<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'tags',  'description', 'owner', 'location', 'logo', 'start_date', 'end_date'];
    public $timestamps = false;

    public function scopeFilter($query, array $filter)
    {
        if ($filter['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filter['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like' . '%', request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('owner', 'like', '%' . request('search') . '%');
        }
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function participants()

    {
        return $this->belongsToMany(User::class, 'participant_event');
    }
}
