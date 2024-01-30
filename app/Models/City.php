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
        $this->loadMissing('county');

        return [
            'name' => $this->name,
            'lon' => $this->lon,
            'lat' => $this->lat,
            'county_name' => $this->county->name,
            'voivodeship_name' => $this->county->voivodeship->name,
        ];
    }

    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }
}
