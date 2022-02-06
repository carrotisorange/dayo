<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function courts()
    {
        return $this->hasMany(Court::class);
    }

    public function scopeidDescending($query)
    {
        return $query->orderBy('country', 'ASC');
    }
}
