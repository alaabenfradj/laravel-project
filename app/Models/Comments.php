<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable  = ['content', 'date'];
    public $timestamps = false;

    public function Events()
    {
        return $this->belongsTo(Event::class);
    }
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
