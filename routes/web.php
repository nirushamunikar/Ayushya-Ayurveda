<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/home/base');
});

Route::get('tariff', function () {
    return view('layouts/main/menu/tariff');
});
Route::get('consultation', function () {
    return view('layouts/main/menu/consultation');
});

Route::get('panchakarma/blissful', function () {
    return view('layouts/main/menu/services/panchakarma/blissful');
});

Route::get('panchakarma/classic', function () {
    return view('layouts/main/menu/services/panchakarma/classic');
});

Route::get('panchakarma/wellness', function () {
    return view('layouts/main/menu/services/panchakarma/wellness');
});


Route::get('training/', function () {
    return view('layouts/main/menu/services/training/training');
});


Route::get('training/advancePancha', function () {
    return view('layouts/main/menu/services/training/AdvancePancha');
});


Route::get('training/Cooking', function () {
    return view('layouts/main/menu/services/training/Cooking');
});


Route::get('training/basicIntro', function () {
    return view('layouts/main/menu/services/training/BasicIntro');
});


Route::get('training/Diagnosis', function () {
    return view('layouts/main/menu/services/training/Diagnosis');
});

Route::get('training/basicPancha', function () {
    return view('layouts/main/menu/services/training/BasicPancha');
});

Route::get('training/AyurvedicMedicine', function () {
    return view('layouts/main/menu/services/training/AyurvedicMedicine');
});

Route::get('training/herbs', function () {
    return view('layouts/main/menu/services/training/Herbs');
});

Route::get('yoga/yogaProgram', function () {
    return view('layouts/main/menu/services/yoga/yogaProgram');
});
Route::get('yoga/yogaTraining', function () {
    return view('layouts/main/menu/services/yoga/yogaTraining');
});
Route::get('yoga/yogic', function () {
    return view('layouts/main/menu/services/yoga/yogic');
});

Route::get('special/ksharsutra', function () {
    return view('layouts/main/menu/special/ksharsutra');
});
Route::get('special/marma', function () {
    return view('layouts/main/menu/special/marma');
});
Route::get('special/personalized', function () {
    return view('layouts/main/menu/special/personalized');
});


Route::post('form','UserController@index');

Route::get('okz',function(){
 return view('layouts/form');   
});

Route::get('success', function () {
    return view('emails/success');
})->name('success');;
Route::get('laravel-version', function()
{
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
});


