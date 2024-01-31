<?php

use App\Models\City;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (\Illuminate\Http\Request $request) {

    if (!$request->has('city')) {
        return [
            'info' => 'Use as ' . Request::root() . ':80?city=Sędziszów',
            'master_key_meilisearch' => env("MEILISEARCH_KEY"),
            'meilisearch' => Request::root() . ':' . substr(env('MEILISEARCH_HOST'), -4),
        ];
    }

    $cities = City::search($request->city)->paginate(5);
    foreach ($cities as $city) {
        $city['percent_match'] = $city->getScoutKey() / 10;
    }

    return $cities;


});
