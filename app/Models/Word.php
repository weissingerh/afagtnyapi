<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Word extends Model
{
    protected $fillable = [
        'name',
        'is_public',
        'category_id',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'category_id',
        'category',
        'is_public',
    ];

    protected $appends = [
        'category_name',
    ];

    protected function categoryName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->category->name
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected function scopeWherePublic($query): Builder
    {
        return $query->where('is_public', true);
    }
}
