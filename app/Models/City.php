<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class City extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'county_id',
        'lon',
        'lat',
        'slug',
    ];

    public function searchableAs(): string
    {
        return 'cities_index';
    }

    public function toSearchableArray(): array
    {
        return $this->with('county')
            ->where('id', '=', $this->id)
            ->first()
            ->toArray();
    }

    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }
}
