<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ErsinController;
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

/*Route::get('/user/{id?}', function ($id = 13) {
    return 'User '.$id;
})->name('erso');*/


Route::get('/user', [ErsinController::class, 'index']);
Route::get('/user/create', [ErsinController::class, 'create']);  
Route::get('/user/{id}', [ErsinController::class, 'show']);

    /*$users = [
        ['name' => 'Ersin Mehmed', 'age' => 23, 'city' => 'Varna'],
        ['name' => 'Ina Sirakova', 'age' => 22, 'city' => 'Varna'],
        ['name' => 'Geri Nikol', 'age' => 24, 'city' => 'Sofia']
    ];*/

    //return view('user', ['id' => $id]);
    /*return view('user',
    [
        'users' => $users,
        'name' => request('name')
    ]);*/


// Route::get('open', [userController::class, 'open']);
// Route::post('user/create',  [userController::class, 'create']);
// Route::post('user/update',  [userController::class, 'update']);
// Route::get('delete/{id}',  [userController::class, 'delete']);

?>
