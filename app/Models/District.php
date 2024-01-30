<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class District extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'city_id',
        'lon',
        'lat',
        'slug',
        'full_name'
    ];

    public function searchableAs(): string
    {
        return 'districts_index';
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
