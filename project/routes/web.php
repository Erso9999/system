<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('erso');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ivan', function () {
    return view('ivan', ['erso' => '<h1>helloe</h1>']);;;;;;
});

Route::get('open', [userController::class, 'open']);
Route::post('user/create',  [userController::class, 'create']);
Route::post('user/update',  [userController::class, 'update']);
Route::get('delete/{id}',  [userController::class, 'delete']);

?>
