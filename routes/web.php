<?php

use App\Http\Controllers\UserController;
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

/* this is only for demo purposes!!! */

Route::get('/', function () {
    return redirect(route('user.index'));
});

/* using methods from UserController class */
Route::resource('user', UserController::class);
