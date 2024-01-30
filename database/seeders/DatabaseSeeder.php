<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Voivodeship;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run()
    {
        $county = json_decode(File::get('./database/data/county.json'), true);

    }
}
