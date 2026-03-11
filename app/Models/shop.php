<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    //

    public function reviews()
    {
        return $this->hasMany(Review::class, 'shop_id', 'id');
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
