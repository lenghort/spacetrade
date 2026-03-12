<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    //

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
