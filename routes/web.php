<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/newlist', function () {
    return view('createlist');
});


Route::post('newlist', [TaskController::class, 'CreateTask']);

Route::post('deletetask', [TaskController::class, 'DeleteTask']);
