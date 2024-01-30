<?php

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

    if ($request->has('search')) {
        $voivodeships = \App\Models\City::search($request->search)->paginate(5);
    }else{
        $voivodeships = \App\Models\City::query()->paginate(5);
    }

    return $voivodeships;
});
