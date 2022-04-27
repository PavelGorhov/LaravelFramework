<?php

use Illuminate\Support\Facades\Route;

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

Route::get('iHate', [\App\Http\Controllers\CHRTController::class, 'OutText']);
Route::get('myName', [\App\Http\Controllers\CHRTController::class, 'GetText']);
Route::get('myDesc', [\App\Http\Controllers\CHRTController::class, 'GetMoreText']);
Route::get('sum', [\App\Http\Controllers\CHRTController::class, 'SumNum']);
Route::get('getSum', [\App\Http\Controllers\CHRTController::class, 'GetSumNum']);
Route::get('hack', [\App\Http\Controllers\CHRTController::class, 'Hack']);

Route::get('confident', [\App\Http\Controllers\CHRTController::class, 'Confidential']);
Route::get('favoriteLine', [\App\Http\Controllers\CHRTController::class, 'FavoriteLine']);
Route::get('li', [\App\Http\Controllers\CHRTController::class, 'liArray']);
Route::get('div', [\App\Http\Controllers\CHRTController::class, 'divArray']);
Route::get('span', [\App\Http\Controllers\CHRTController::class, 'spanArray']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('my-name', function () {
    return ('Русанов Роман Витальевич');
});

Route::get('my-friend', function () {
    return ('Кушнир Дмитрий Андреевич');
});

Route::get('get-friend/name', function ($nameFriend = 'Пивоваров Вадим Павлович') {
    return $nameFriend;
});

Route::get('my-city/{city}', function ($city) {
    return $city;
});

Route::get('level/{lvl}', function ($lvl) {
    if(($lvl>=0)&&($lvl<=25)){
        return 'новичок';}
    if(($lvl>=26)&&($lvl<=50)){
        return 'специалист';}
    if(($lvl>=51)&&($lvl<=75)){
        return 'босс';}
    if(($lvl>=76)&&($lvl<=98)){
        return 'старик';}
    if($lvl==99){
        return 'король';}
    else return 'ошибка';
});

Route::get('working/{name}/{date?}', function ($name, $date) {
    return ('Название проекта: '.$name.' Дата выполнения проекта:'.$date) ;
});

Route::get('working/{name}/{date?}', function ($name, $date) {
    return ('Название проекта: '.$name.' Дата выполнения проекта:'.$date) ;
});

Route::get('/power/power', function () {
    return '<a href="/test">узнать данный путь</a>';
})->name('power');
Route::get('/test', function(){
    return route('power');
});

Route::prefix('admin')->group(function (){
    Route::get('/login', function (){
        return 'админ логин';
    });
    Route::get('/logout', function (){
        return 'админ логаут';
    });
    Route::get('/info', function (){
        return 'админ инфо';
    });
    Route::get('/color', function (){
        return 'админ цвет';
    });
});

Route::redirect('/admin/web', '/admin/color');

Route::get('/color/{hex}', function ($hex){
    return $hex;
}) -> where('hex', '[0-9a-fA-F]{6}+');
