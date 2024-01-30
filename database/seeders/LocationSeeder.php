<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\County;
use App\Models\District;
use App\Models\Voivodeship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class LocationSeeder extends Seeder
{
    private const LOCATIONS_DIRECTORY = './database/data/polish-data/';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voivodeships = json_decode(File::get(self::LOCATIONS_DIRECTORY . 'voivodeships.json'), true);
        Voivodeship::query()->insert($voivodeships);

        $counties = json_decode(File::get(self::LOCATIONS_DIRECTORY . 'counties.json'), true);
        County::query()->insert($counties);

        $cities = json_decode(File::get(self::LOCATIONS_DIRECTORY . 'cities.json'), true);
        City::query()->insert($cities);

        $districts = json_decode(File::get(self::LOCATIONS_DIRECTORY . 'districts.json'), true);
        District::query()->insert($districts);

    }
}
