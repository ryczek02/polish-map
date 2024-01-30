<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class County extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'name_locative',
        'voivodeship_id',
        'lon',
        'lat',
        'slug'
    ];

    public function searchableAs(): string
    {
        return 'counties_index';
    }

    public function toSearchableArray(): array
    {
        return $this->with('voivodeship')
            ->where('id', '=', $this->id)
            ->first()
            ->toArray();
    }

    protected function makeAllSearchableUsing($query)
    {
        return $query->with('voivodeship');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function voivodeship(): BelongsTo
    {
        return $this->belongsTo(Voivodeship::class);
    }
}
