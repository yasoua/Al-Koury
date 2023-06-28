<?php

//use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Models\Cars;


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

Route::get('/', function () {
    $cars = Cars::all();
    foreach ($cars as $car ){
        if ($car->engine_type == 0){
            $car->enginetype = 'Fuel';
        }elseif ($car->engine_type == 1){
            $car->enginetype = 'Electricity';
        }else{
            $car->enginetype = 'Hybrid';
        }

        if ($car->gear_shift == 0){
            $car->gear_shift = 'Norm';
        }elseif ($car->gear_shift == 1){
            $car->gear_shift = 'Auto';
        }else{
            $car->gear_shift = 'Hybrid';
        }

        if ($car->air_condition == 1){
            $car->aircondition = 'Air Condition';
        }else{
            $car->aircondition = 'Not Available';
        }
    }
    return view('index', ['services' => Service::all() , 'cars' => $cars ]);
});

Route::get('/about', function () {
    return view('about');
});

route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::resource('cars',CarsController::class);
Route::resource('services',ServiceController::class);




