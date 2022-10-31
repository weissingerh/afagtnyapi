<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'is_public',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'is_public',
    ];

    public function words(): HasMany
    {
        return $this->hasMany(Word::class);
    }

    protected function scopeWherePublic($query): Builder
    {
        return $query->where('is_public', true);
    }
}
