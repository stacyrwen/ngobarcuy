<?php

use Illuminate\Support\Facades\Route;

//ini adalah controller ngobar
use App\Http\Controllers\NgobarController;
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
    return view('welcome');
});

// Route::get('', function (){
//     return view('ngobars.index');
// });

Route::resource('ngobars', NgobarController::class);