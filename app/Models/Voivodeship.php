<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Voivodeship extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'name_locative',
        'lon',
        'lat',
        'slug'
    ];

    public function searchableAs(): string
    {
        return 'voivodeships_index';
    }

    public function counties(): HasMany
    {
        return $this->hasMany(County::class);
    }
}
