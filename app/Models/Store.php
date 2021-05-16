<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'owner_id'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
