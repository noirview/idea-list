<?php

namespace App\Models;

use App\Enums\CategoryStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('status', CategoryStatus::ACTIVE);
    }
}
