<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});


// Route::get('/{action}/{name?}', function ($action,$name = null) {
//     return ($action . $name);
// }); ////lokal cheklov


// Route::get('/user/{name?}', function ($name = null) {
//     return ('Hello user ' . $name);
// });

Route::get('/search', function (Request $request) {
    $name = $request->get('name','Nodir');
    $age = $request->get('age', 27);
    return $name.' ismli foydalanuvchi, '. $age . ' yoshda';
    // return $request->all(); hamma o'zgaruvchini osa bo'ladi
});


////////////////////dashboard/users  gruxlash

// Route::group(['prefix' =>'dashboard'], function(){

//     Route::get('/users', function () {
//         return 'Users dashboard';
//     });

//     Route::get('/statistic', function () {
//         return 'Statistic dashboard';
//     });
// });


/////////////////////////////Controller php artisan make:controller UserController

Route::get('/user/{name?}',[UserController::class,'show']);

Route::get('/users', [UserController::class, 'lists']);

Route::get('/user/add', [UserController::class, 'add']);

/////////////////////////////////////// Simple cahe controller metid yoq
// Route::get('/show/{id}', ShowProfileController::class);

Route::get('/home', [HomeController::class, 'index']);


Route::get('/members', [HomeController::class, 'members']);

Route::get('/about', [HomeController::class, 'about']);
