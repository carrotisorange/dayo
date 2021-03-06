<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public function courts()
    {
        return $this->hasMany(Court::class);
    }

    public function scopeIdDescending($query)
    {
        return $query->orderBy('province', 'ASC');
    }
}
