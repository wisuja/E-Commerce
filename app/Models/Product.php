<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function scopePromotion($query) {
        return $query->where([
            ['promotion', '=', true],
            ['stock', '>', 0],
        ]);
    }
}
