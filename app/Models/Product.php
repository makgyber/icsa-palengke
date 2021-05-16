<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'price', 'stock_count', 'store_id'
    ];

    public function store() {
        return $this->belongsTo(Store::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
